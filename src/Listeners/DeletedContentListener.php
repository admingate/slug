<?php

namespace Admingate\Slug\Listeners;

use Admingate\Base\Events\DeletedContentEvent;
use Admingate\Slug\Repositories\Interfaces\SlugInterface;
use Exception;
use SlugHelper;

class DeletedContentListener
{
    public function __construct(protected SlugInterface $slugRepository)
    {
    }

    public function handle(DeletedContentEvent $event): void
    {
        if (SlugHelper::isSupportedModel(get_class($event->data))) {
            try {
                $this->slugRepository->deleteBy([
                    'reference_id' => $event->data->id,
                    'reference_type' => get_class($event->data),
                ]);
            } catch (Exception $exception) {
                info($exception->getMessage());
            }
        }
    }
}

<?php
namespace UaQuetzalcoatl\DoctrineVersionable;

use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Events;
use Doctrine\ORM\Event\OnFlushEventArgs;

/**
 * Description of VersionSubscriber
 *
 * @author alex
 */
class VersionSubscriber implements EventSubscriber
{
    /**
     * Returns an array of events this subscriber wants to listen to.
     *
     * @return array
     */
    public function getSubscribedEvents()
    {
        return array(Events::onFlush);
    }

    public function onFlush(OnFlushEventArgs $args)
    {

    }
}

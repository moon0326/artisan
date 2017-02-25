<?php

namespace Moon\Artisan\Stub;

use Illuminate\Container\Container;
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;

class Dispatcher implements DispatcherContract
{
    /**
     * Register an event listener with the dispatcher.
     *
     * @param string|array $events
     * @param mixed        $listener
     * @param int          $priority
     */
    public function listen($events, $listener, $priority = 0)
    {
    }

    /**
     * Setup a wildcard listener callback.
     *
     * @param string $event
     * @param mixed  $listener
     */
    protected function setupWildcardListen($event, $listener)
    {
    }

    /**
     * Determine if a given event has listeners.
     *
     * @param string $eventName
     *
     * @return bool
     */
    public function hasListeners($eventName)
    {
    }

    /**
     * Register an event and payload to be fired later.
     *
     * @param string $event
     * @param array  $payload
     */
    public function push($event, $payload = [])
    {
    }

    /**
     * Register an event subscriber with the dispatcher.
     *
     * @param object|string $subscriber
     */
    public function subscribe($subscriber)
    {
    }

    /**
     * Resolve the subscriber instance.
     *
     * @param object|string $subscriber
     *
     * @return mixed
     */
    protected function resolveSubscriber($subscriber)
    {
    }

    /**
     * Fire an event until the first non-null response is returned.
     *
     * @param string|object $event
     * @param array         $payload
     *
     * @return mixed
     */
    public function until($event, $payload = [])
    {
    }

    /**
     * Flush a set of pushed events.
     *
     * @param string $event
     */
    public function flush($event)
    {
    }

    /**
     * Get the event that is currently firing.
     *
     * @return string
     */
    public function firing()
    {
    }

    /**
     * Fire an event and call the listeners.
     *
     * @param string|object $event
     * @param mixed         $payload
     * @param bool          $halt
     *
     * @return array|null
     */
    public function fire($event, $payload = [], $halt = false)
    {
    }

    /**
     * Broadcast the given event class.
     *
     * @param \Illuminate\Contracts\Broadcasting\ShouldBroadcast $event
     */
    protected function broadcastEvent($event)
    {
    }

    /**
     * Get all of the listeners for a given event name.
     *
     * @param string $eventName
     *
     * @return array
     */
    public function getListeners($eventName)
    {
    }

    /**
     * Get the wildcard listeners for the event.
     *
     * @param string $eventName
     *
     * @return array
     */
    protected function getWildcardListeners($eventName)
    {
    }

    /**
     * Sort the listeners for a given event by priority.
     *
     * @param string $eventName
     *
     * @return array
     */
    protected function sortListeners($eventName)
    {
    }

    /**
     * Register an event listener with the dispatcher.
     *
     * @param mixed $listener
     *
     * @return mixed
     */
    public function makeListener($listener)
    {
    }

    /**
     * Create a class based listener using the IoC container.
     *
     * @param mixed $listener
     *
     * @return \Closure
     */
    public function createClassListener($listener)
    {
    }

    /**
     * Create the class based event callable.
     *
     * @param string                          $listener
     * @param \Illuminate\Container\Container $container
     *
     * @return callable
     */
    protected function createClassCallable($listener, $container)
    {
    }

    /**
     * Parse the class listener into class and method.
     *
     * @param string $listener
     *
     * @return array
     */
    protected function parseClassCallable($listener)
    {
    }

    /**
     * Determine if the event handler class should be queued.
     *
     * @param string $class
     *
     * @return bool
     */
    protected function handlerShouldBeQueued($class)
    {
    }

    /**
     * Create a callable for putting an event handler on the queue.
     *
     * @param string $class
     * @param string $method
     *
     * @return \Closure
     */
    protected function createQueuedHandlerCallable($class, $method)
    {
    }

    /**
     * Clone the given arguments for queueing.
     *
     * @param array $arguments
     *
     * @return array
     */
    protected function cloneArgumentsForQueueing(array $arguments)
    {
    }

    /**
     * Call the queue method on the handler class.
     *
     * @param string $class
     * @param string $method
     * @param array  $arguments
     */
    protected function callQueueMethodOnHandler($class, $method, $arguments)
    {
    }

    /**
     * Remove a set of listeners from the dispatcher.
     *
     * @param string $event
     */
    public function forget($event)
    {
    }

    /**
     * Forget all of the pushed listeners.
     */
    public function forgetPushed()
    {
    }

    /**
     * Get the queue implementation from the resolver.
     *
     * @return \Illuminate\Contracts\Queue\Queue
     */
    protected function resolveQueue()
    {
    }

    /**
     * Set the queue resolver implementation.
     *
     * @param callable $resolver
     *
     * @return $this
     */
    public function setQueueResolver(callable $resolver)
    {
    }

	/**
	 * Fire an event until the first non-null response is returned.
	 *
	 * @param  string|object $event
	 * @param  mixed         $payload
	 * @param  bool          $halt
	 *
	 * @return array|null
	 */
	public function dispatch($event, $payload = [], $halt = false)
	{
	}
}

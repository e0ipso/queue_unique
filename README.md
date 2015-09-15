# Unique Queue
Did you ever wanted a queue that only accepts unique items? This module provides a way of doing that. If you try to insert a duplicated item in the queue, an exception is thrown.

```php
// $data can be anything.
$data = array('Lorem', 'ipsum');

$queue = \DrupalQueue::get('your_queue_name');
$queue->createQueue();
// This puts the $data array in the queue the first time.
$queue->createItem($data);
try {
  // This throws a \Drupal\unique_queue\Queue\SystemSetQueueException exception.
  $queue->createItem($data);
}
catch (\Drupal\unique_queue\Queue\SystemSetQueueException $e) {
  // The exception is caught, carry on.
  // Don't do anything here if you want to just ignore duplicates.
}
```

# Usage
In order for your queue to use the unique queue you need to set a variable:

```php
$queue_name = 'your_queue_name';
variable_set('queue_class_' . $queue_name, '\\Drupal\\unique_queue\\Queue\\SystemSetQueue');
```

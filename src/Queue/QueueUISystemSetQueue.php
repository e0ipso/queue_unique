<?php

/**
 * @file
 * Contains \Drupal\unique_queue\Queue\QueueUISystemSetQueue
 */

namespace Drupal\unique_queue\Queue;

class QueueUISystemSetQueue extends \QueueUISystemQueue implements \QueueUIInterface {

  /**
   * The table name.
   *
   * @var string
   */
  protected $tableName = 'queue_unique';

}

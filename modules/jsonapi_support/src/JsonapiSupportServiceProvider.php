<?php

namespace Drupal\jsonapi_support;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;
use Drupal\jsonapi_support\Controller\JsonApiRequestHandler;
use Drupal\jsonapi_support\ResourceType\ResourceTypeRepository;

/**
 * Alters Jsonapi service to override the resource type repository.
 *
 * @see \Drupal\admin_ui_support\Controller\JsonApiRequestHandler
 */
class JsonapiSupportServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
    // @TODO add back support for config entities
    // if ($container->has('jsonapi.request_handler')) {
    //   // Override the class used for Jsonapi request handler.
    //   $definition = $container->getDefinition('jsonapi.request_handler');
    //   $definition->setClass(JsonApiRequestHandler::class);
    // }
  }

}

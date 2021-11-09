<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'sensor_alerts_index' => [[], ['_controller' => 'App\\Controller\\SensorAlertsController::index'], [], [['text', '/sensor/alerts/']], [], []],
    'sensor_alerts_new' => [[], ['_controller' => 'App\\Controller\\SensorAlertsController::new'], [], [['text', '/sensor/alerts/new']], [], []],
    'sensor_alerts_show' => [['id'], ['_controller' => 'App\\Controller\\SensorAlertsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/sensor/alerts']], [], []],
    'sensor_alerts_edit' => [['id'], ['_controller' => 'App\\Controller\\SensorAlertsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/sensor/alerts']], [], []],
    'sensor_alerts_delete' => [['id'], ['_controller' => 'App\\Controller\\SensorAlertsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/sensor/alerts']], [], []],
    'sensor_detail_index' => [[], ['_controller' => 'App\\Controller\\SensorDetailController::index'], [], [['text', '/admin/sensors']], [], []],
    'sensor_detail_new' => [[], ['_controller' => 'App\\Controller\\SensorDetailController::new'], [], [['text', '/admin/sensor/new']], [], []],
    'sensor_detail_show' => [['id'], ['_controller' => 'App\\Controller\\SensorDetailController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/sensor']], [], []],
    'sensor_detail_edit' => [['id'], ['_controller' => 'App\\Controller\\SensorDetailController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/sensor']], [], []],
    'sensor_detail_delete' => [['id'], ['_controller' => 'App\\Controller\\SensorDetailController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/sensor']], [], []],
    'rest_add_sensor_measurement' => [['uuid'], ['_controller' => 'App\\Controller\\SensorMeasurementController::add_sensor_measurement'], [], [['text', '/mesurements'], ['variable', '/', '[^/]++', 'uuid', true], ['text', '/api/v1/sensor']], [], []],
    'rest_get_sensor_measurement' => [['uuid'], ['_controller' => 'App\\Controller\\SensorMeasurementController::get_sensor_measurement'], [], [['variable', '/', '[^/]++', 'uuid', true], ['text', '/api/v1/sensor']], [], []],
    'rest_get_sensor_alerts' => [['uuid'], ['_controller' => 'App\\Controller\\SensorMeasurementController::get_sensor_alerts'], [], [['text', '/alerts'], ['variable', '/', '[^/]++', 'uuid', true], ['text', '/api/v1/sensor']], [], []],
    'rest_get_sensor_metrics' => [['uuid'], ['_controller' => 'App\\Controller\\SensorMeasurementController::get_sensor_metrics'], [], [['text', '/metrics'], ['variable', '/', '[^/]++', 'uuid', true], ['text', '/api/v1/sensor']], [], []],
];

<?php

return [

    'disk_name' => env('MEDIA_DISK', 'public'),

    'max_file_size' => 1024 * 1024 * 10, // 10MB

    'queue_conversions_by_default' => false, // Disable queued conversions to prevent parallel processing

    'queue_connection_name' => null, // Use the default sync processing

    'media_model' => Spatie\MediaLibrary\MediaCollections\Models\Media::class,

    'image_driver' => env('IMAGE_DRIVER', 'gd'), // Use GD for image processing to avoid issues with Imagick

    'image_optimizers' => [], // Disable image optimization to simplify configuration

    'image_generators' => [
        Spatie\MediaLibrary\Conversions\ImageGenerators\Image::class,
    ],

    'temporary_directory_path' => null, // Default temporary directory

    'jobs' => [
        'perform_conversions' => Spatie\MediaLibrary\Conversions\Jobs\PerformConversionsJob::class,
    ],

    'responsive_images' => [
        'use_tiny_placeholders' => false, // Disable placeholders for simplicity
    ],

    'enable_vapor_uploads' => false, // Disable Vapor uploads

    'default_loading_attribute_value' => null, // No default loading attribute

];

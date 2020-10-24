<?php

namespace App\Providers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\ServiceProvider;

/**
 * UploadedFileMacroProvider.
 * @package App\Providers
 *
 * @method string getPath()
 * @method string|null guessExtension()
 */
class UploadedFileMacroProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $allowExtensions = ['jpeg', 'png', 'gif', 'bmp', 'svg', 'webp'];

        UploadedFile::macro('isImage', function () use ($allowExtensions) {
            return $this->getPath() !== '' && in_array($this->guessExtension(), $allowExtensions);
        });
    }
}

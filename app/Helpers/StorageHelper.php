<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;
class StorageHelper
{
    public static function downloader($filename, $disk = 'default') : BinaryFileResponse | RedirectResponse | StreamedResponse
    {
        if ($disk == 'default') {
            $disk = config('filesystems.default');
        }
        switch (config("filesystems.disks.$disk.driver")) {
            case 'local':
                return response()->download(Storage::disk($disk)->path($filename)); //works for PRIVATE or public?!

            case 's3':
                return redirect()->away(Storage::disk($disk)->temporaryUrl($filename, now()->addMinutes(5))); //works for private or public, I guess?

            default:
                return Storage::disk($disk)->download($filename);
        }
    }


    /**
     * This determines the file types that should be allowed inline and checks their fileinfo extension
     * to determine that they are safe to display inline.
     *
     * @author <A. Gianotto> [<snipe@snipe.net]>
     * @since v7.0.14
     * @param $file_with_path
     * @return bool
     */
    public static function allowSafeInline($file_with_path) {

        $allowed_inline = [
            'pdf',
            'svg',
            'jpg',
            'gif',
            'svg',
            'avif',
            'webp',
            'png',
        ];

        if (in_array(pathinfo($file_with_path, PATHINFO_EXTENSION), $allowed_inline)) {
            return true;
        }

        return false;

    }
}

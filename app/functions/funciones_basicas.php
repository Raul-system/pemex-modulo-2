<?php

use Illuminate\Support\Facades\Storage;

function deleteStorageFile($Ruta)
{
    if (Storage::disk('local')->exists($Ruta)) {
        Storage::delete($Ruta);
    }
}

function guardarArchivo($request, $NameFile, $Ruta)
{
    if ($request->hasFile($NameFile)) {
        $imageName =
            $request->file($NameFile)->getClientOriginalName();
        $Name =  time() . "_" . rand(50, 1000) . "_" . $imageName;
        $path = $request->file($NameFile)->storeAs($Ruta, $Name);
        return $Name;
    }
}
function downloadStorageFile($departamento, $tipo, $archivo)
{
    return Storage::download('public/' . $departamento  . '/' . $tipo . '/' .  $archivo);
    /* return 'public/' . $departamento  . '/' . $tipo . '/' .  $archivo; */
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;


class blendermodelController extends Controller
{



    public function process(Request $request)
    {
        // Validation rules
        $rules = [
            'model' => 'required|file',
            'color' => 'required|string',
        ];

        // Validate the request data
        $validatedData = $request->validate($rules);

        // Save the 3D model and RGB color as temporary files
        $modelFile = $request->file('model');
        $modelExtension = $modelFile->getClientOriginalExtension();
        $modelPath = $modelFile->storeAs('temp', $modelFile->hashName() . '.' . $modelExtension);
        $colorPath = Storage::put('temp/color.txt', $validatedData['color']);

        // Store the paths in the session
        session(['modelPath' => $modelPath, 'colorPath' => $colorPath]);
        // return redirect()->route('edit_3dmodel')
        //     ->with('success', 'Validation successful')
        //     ->with('modelPath', $modelPath)
        //     ->with('colorPath', $colorPath);


        // Call the Blender script with the input arguments
        $blenderPath = env('BLENDER_PATH');
        $pythonScript = base_path('scripts\change_color.py');
        $outputPath = 'D:\\codes\\online-shopping-fyp\\laravel\\storage\\app\\public\\models';
        $outputName = uniqid() . '.obj';
        if (is_writable($outputPath)) {
            echo "The output directory is writable.";
        } else {
            echo "The output directory is not writable.";
        }

        $output = [];
$return_var = null;

$command = "{$blenderPath} --background --python {$pythonScript} -- {$modelPath} {$outputPath}\\{$outputName} {$colorPath}";
exec($command, $output, $return_var);

if ($return_var === 0) {
    echo "Command executed successfully.";
} else {
    echo "Command failed with return value: {$return_var}";
}



        $command = "{$blenderPath} --background --python {$pythonScript} -- {$modelPath} {$outputPath}\\{$outputName} {$colorPath}";

        exec($command);

        return redirect()->route('edit_3dmodel')
    ->with('success', 'Validation successful')
    ->with('modelPath', $modelPath)
    ->with('colorPath', $colorPath)
    ->with('blenderPath', $blenderPath)
    ->with('outputName', $outputName)
    ->with('command', $command);

    }
        // // Delete the temporary files
        // Storage::delete([$modelPath, $colorPath]);

        // // Check if the colored model has been stored successfully
        // $coloredModelUrl = asset("storage/models/{$outputName}");
    //     return redirect()->route('edit_3dmodel')
    // ->with('success', 'Validation successful')
    // ->with('modelPath', $modelPath)
    // ->with('colorPath', $colorPath)
    // ->with('blenderPath', $blenderPath)
    // ->with('outputName', $outputName)
    // ->with('command', $command)
    // ->with('coloredModelUrl', $coloredModelUrl);

    //     if (file_exists(public_path("storage/models/{$outputName}"))) {
    //         // The file has been stored successfully
    //         return $coloredModelUrl;
    //     } else {
    //         // The file has not been stored successfully
    //         return response()->json(['error' => 'Failed to store the colored model'], 500);
    //     }
    //  }



// public function process(Request $request)
// {
//     $model = $request->file('model');
//     $color = $request->input('color');
//     $originalExtension = $model->getClientOriginalExtension();

//     // Save the uploaded 3D model
//     $modelPath = $model->store('models', 'public');

//     // Call the Blender script to process the 3D model
//     $updatedModelPath = $this->processModelWithBlender($modelPath, $color, $originalExtension);

//     // Return the updated model path or show it in a view
//     return $updatedModelPath;
// }


// protected function processModelWithBlender($modelPath, $color, $originalExtension)
// {
//     $inputModelPath = storage_path("app/public/{$modelPath}");
//     $updatedModelsDirectory = $this->getUpdatedModelsDirectory();
//     if (!file_exists($updatedModelsDirectory)) {
//         mkdir($updatedModelsDirectory, 0777, true);
//     }
//     $outputModelPath = $updatedModelsDirectory . "/" . pathinfo($modelPath, PATHINFO_FILENAME) . "_updated." . $originalExtension;
//     $blenderScriptPath = base_path('laravel/resources/scripts/change_color.py');

//     // Convert the RGB color to hex
//     $colorHex = str_replace("#", "", $color);

//     // Call the Blender script
//     $command = "blender --background --python {$blenderScriptPath} -- {$inputModelPath} {$outputModelPath} {$colorHex}";
//     exec($command);

//     // Return the updated model path
//     return "updated_models/" . pathinfo($modelPath, PATHINFO_FILENAME) . "_updated." . $originalExtension;
// }

// public function getUpdatedModelsDirectory()
// {
//     $updatedModelsDirectory = storage_path('app/public/updated_models');
//     return $updatedModelsDirectory;
// }


}
      // ####checking of string
        // $color = $request->input('color');

        // if (is_string($color)) {
        //      echo "The 'color' value is a string.";
        // } else {
        //    echo "The 'color' value is not a string.";
        // }

        // dd($request->all());
        // // dd($request->all());

    //     $validator = Validator::make($request->all(), [
    //         'model' => 'file|mimetypes:model/obj',
    //         'color' => 'string',
    //     ]);

    //     $uploadedFile = $request->file('model');
    //     $fileExtension = $uploadedFile->getClientOriginalExtension();

    // if ($fileExtension == 'obj') {
    //     echo "The uploaded file has a '.obj' format.";
    // } else {
    //     echo "The uploaded file does not have a '.obj' format.";
    // }

    //     if ($validator->fails()) {
    //         return redirect()->route('edit_3dmodel')->withErrors($validator)->withInput();
    //     }

    //     return redirect()->route('edit_3dmodel')->with('success', 'Validation successful');
    // }

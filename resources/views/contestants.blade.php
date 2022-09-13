<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">

        <title>Laravel</title>
    </head>
    <body>
        <?php 
            $projects = DB::select('select * from Wizkid WHERE active = 1');
            use Illuminate\Support\Facades\Storage;
        ?>
    <div class="container">
        @include('layouts.header')
            <div id="info" class="info">
                <h1 class="white-txt">Current Wizkids</h1>
            </div>
            <div id="projects" class="projects">

            <?php foreach ($projects as $project) { ?>
                <div class="card-parent">
                    <a target="_blank" href="<?php echo $project->link; ?>">
                        <div class="card">
                            <p class="width-60 margin-20 txt-left">
                                <span class="a">Name:</span> <?php echo $project->name ?><br>
                                <span class="a">URL:</span> <?php echo $project->link ?><br>
                                <span class="a">Created at:</span> <?php echo $project->created_at ?><br><br>
                                <span class="a">Description:</span><br> <?php echo $project->description ?>
                            </p>
                        </div>
                    </a>
                </div>
            <?php }?>

            </div>
    </div>
</body>

</html>

<?php
session_start();
$_SESSION['a']='SESSION';
var_dump($_SESSION);
?>
@extends('layouts.layout')

@section('blog')
    <div class="row">
        <div class="col-2"></div>
        <div class="col-6">
        <h3>Работа $_SESSION</h3>
            <pre>
                session_start();
                $_SESSION['a']='SESSION';
                var_dump($_SESSION);
            </pre>

            <?php var_dump($_SESSION);?>
            {{__DIR__}}
            {{__FILE__}}
        </div>
        <div class="col-4">
            <?php $dir=__DIR__;
                $path=str_replace('\\','/',$dir);
                // include $path.'/trash/form.blade.php';
                //include 'form.blade.php';
            ?>
        </div>
    </div>
@endsection

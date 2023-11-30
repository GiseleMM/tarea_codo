<?php 

$mascotas=[];
$m1=["id"=>1,"nombre"=>"lola","img"=>"https://images.freeimages.com/images/large-previews/4da/puppy-1371458.jpg","descripcion"=>"cuenta con todas las vacunas"];

$m2=["id"=>2,"nombre"=>"manchita","img"=>"  https://img.freepik.com/foto-gratis/disparo-vertical-enfoque-superficial-lindo-cachorro-golden-retriever-sentado-suelo-hierba_181624-27259.jpg?w=360&t=st=1701359907~exp=1701360507~hmac=f5a5de693d9d209be02bfe808aab2650a55f4287c5563db52ffd4c1c0ea49de7","descripcion"=>"se lleva con perros y gastos"];

$m3=["id"=>3,"nombre"=>"firu","img"=>"https://images.freeimages.com/images/large-previews/c1c/dog-1361477.jpg","descripcion"=>"super tranquilo"];

$m4=["id"=>4,"nombre"=>"roca","img"=>"https://images.freeimages.com/images/large-previews/3f8/dog-1383342.jpg","descripcion"=>"super jugueton ideal para niños"];
$mascotas[]=$m1;
$mascotas[]=$m2;
$mascotas[]=$m3;
$mascotas[]=$m4;


function dameUnCard($item):string
{
    $grilla='<div class="card w-50">
    <img class="bd-placeholder-img card-img-top" width="50%" height="180" role="img"
        focusable="false"
        preserveAspectRatio="xMidYMid slice" src="';
        $grilla.=$item["img"].'"/>
    <div class="card-body">
        <h5 class="card-title">';
        $grilla.=$item["nombre"].'</h5>
        <p class="card-text">';
        $grilla.=$item["descripcion"].'</p>
        <p class="card-text"><small class="text-body-secondary">Última actualización hace 3 minutos</small>
        </p>
    </div> 
    </div>';
    return $grilla;

}


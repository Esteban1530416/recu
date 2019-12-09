<?php $__env->startSection('contenido'); ?>


<template v-if="menu==0">

    <dashboard></dashboard>
</template>
<template v-if="menu==1">
    <categoria></categoria>
</template>
<template v-if="menu==2">
    <articulo></articulo>
</template>
<template v-if="menu==3">
    <ingreso></ingreso>
</template>
<template v-if="menu==4">
    <proveedor></proveedor>
</template>
<template v-if="menu==5">
    <venta></venta>
</template>
<template v-if="menu==6">
    <cliente></cliente>
</template>
<template v-if="menu==7">
    <user></user>
</template>
<template v-if="menu==8">
   <rol></rol>
</template>
<template v-if="menu==9">
    <consultaingreso></consultaingreso>
</template>
<template v-if="menu==10">
    <consultaventa></consultaventa>
</template>
<template v-if="menu==11">
    <ayuda></ayuda>
</template>
<template v-if="menu==12">
    <acerca></acerca>
</template>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel1/sistema/taw-2019/blog/resources/views/contenido/contenido.blade.php ENDPATH**/ ?>
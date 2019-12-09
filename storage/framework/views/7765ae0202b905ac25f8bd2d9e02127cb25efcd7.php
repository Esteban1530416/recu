<?php $__env->startSection('contenido'); ?>


<template v-if="menu==0">

</template>
<template v-if="menu==1">
</template>
<template v-if="menu==2">
    <articulo></articulo>
</template>
<template v-if="menu==3">
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
    
</template>
<template v-if="menu==8">
 
</template>
<template v-if="menu==9">
  
</template>
<template v-if="menu==10">
</template>
<template v-if="menu==11">
</template>
<template v-if="menu==12">
</template>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel/taw2019-master (1)/resources/views/contenido/contenido.blade.php ENDPATH**/ ?>
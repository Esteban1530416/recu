@extends('principal')
@section('contenido')


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

@endsection

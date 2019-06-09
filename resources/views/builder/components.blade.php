/*
 * mesh v1.0.0 (https://meshcss.com)
 * Copyright 2018-2019 meshCSS
 * MIT License (https://github.com/ainsleyclark/mesh/blob/master/LICENSE)
 */

///**
//* mesh.scss
//* Imports all files from abstracts, base, components, layout, pages & vendor
//* @author Ainsley Clark
//* @author URL:   https://www.ainsleyclark.com
//* @author email: info@ainsleyclark.com
//

//Abstracts
// ==========================================================================
@import '{{ base_path() }}/mesh-src/src/abstracts/_functions.scss';
@import '{{ base_path() }}/mesh-src/src/abstracts/_mixins';
@import '{{ base_path() }}/mesh-src/src/abstracts/_variables';

//Base
// ==========================================================================
@if( !empty($base))
    @foreach($base as $name => $import)
{!! $import !!}
    @endforeach
@endif

@import '{{ base_path() }}/mesh-src/src/base/_global';

//Grid
// ==========================================================================
@import '{{ base_path() }}/mesh-src/src/grid/_grid';
@import '{{ base_path() }}/mesh-src/src/grid/_flex';
@import '{{ base_path() }}/mesh-src/src/grid/_order';
@import '{{ base_path() }}/mesh-src/src/grid/_display';

//Util
// ==========================================================================
@if( !empty($util))
    @foreach($util as $name => $import)
{!! $import !!}
    @endforeach
@endif

//Components
// ==========================================================================
@if( !empty($components))
    @foreach($components as $name => $import)
{!! $import !!}
    @endforeach
@endif
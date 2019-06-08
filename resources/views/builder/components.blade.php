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
@import '../mesh-src/src/abstracts/_functions.scss';
@import '../mesh-src/src/abstracts/_mixins';
@import '../mesh-src/src/abstracts/_variables';

//Base
// ==========================================================================
@foreach($base as $name => $import)
{!! $import !!}
@endforeach
@import '../mesh-src/src/base/_global';

//Grid
// ==========================================================================
@import '../mesh-src/src/grid/_grid';
@import '../mesh-src/src/grid/_flex';
@import '../mesh-src/src/grid/_order';
@import '../mesh-src/src/grid/_display';

//Util
// ==========================================================================
@foreach($util as $name => $import)
{!! $import !!}
@endforeach

//Components
// ==========================================================================
@foreach($components as $name => $import)
{!! $import !!}
@endforeach
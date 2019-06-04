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
@import '../../src/abstracts/_functions.scss';
@import '../../src/abstracts/_mixins';
@import '../../src/abstracts/_variables';

//Base
// ==========================================================================
@foreach($global as $name => $import)
{!! $import !!}
@endforeach
@import '../../src/base/_global';

//Grid
// ==========================================================================
@import '../../src/grid/_grid';
@import '../../src/grid/_flex';
@import '../../src/grid/_order';
@import '../../src/grid/_display';

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
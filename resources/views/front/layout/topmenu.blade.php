
<div id="menubar">

	@php
	$menusdata = app('App\Http\Controllers\Web\HomeController')->topmenus();
	$fallback_local = $menusdata['fallback_local'];
	// $lang = $menusdata['lang'];
@endphp
{{-- {{ $menusdata['menus'] }} --}}
@foreach ($menusdata['menus'] as $menu)
<li class="{{ $menu->show_cat_in_dropdown == 1 || $menu->show_child_in_dropdown == 1 ? 'mega-drop-down' : '' }}">
	<a href="{{ $menu->link_by == 'page' ? url('/show/' . $menu->gotopage->slug) : $menu->url }}"
		class="bignavbar" role="button"
		@if ($menu->link_by == 'cat' && $menu->cat_id != 0)
			onclick="redirectMe('{{ $menu->cat_id }}', 'p'); return false;" 
		@endif>
		
		@if ($menu->icon != null)
			<i class="fa {{ $menu->icon }}"></i>
		@endif
		{{ is_array($menu->title) ? ($menu->title[app()->getLocale()] ?? $menu->title[$fallback_local]) : $menu->title }}
	 
		@if ($menu->menu_tag == 1)
			<span class="menu-label new_menu hidden-xs" 
				  style="background-color: {{ $menu->tag_bg }}; color: {{ $menu->tag_bg }}"
				  title="Tag Text">
				<span style="color: {{ $menu->tag_color }}">
					{{ $menu->tag_text[app()->getLocale()] ?? $menu->tag_text }}
				</span>
			</span>
		@endif
	 </a>
	 

	@if ($menu->show_cat_in_dropdown == 1 || $menu->show_child_in_dropdown == 1)
		<div class="desktopmegamenu mega-menu mr-2 ml-2">
			<div class="mega-menu-wrap">
				<div class="row">
					<div class="{{ $menu->bannerimage ? 'col-md-9' : 'col-md-12' }}">
						<div class="row">
							@foreach ($menu->megamenu as $key => $value)
							<div class="p-3 {{ count($menu->megamenu) >= 4 ? 'col-3' : (count($menu->megamenu) == 2 ? 'col-6' : (count($menu->megamenu) == 3 ? 'col-4' : 'col-12')) }} {{ $key % 2 == 0 ? 'f3efef' : '' }}">
									@foreach ($value as $v)
										@if ($v->type == 'category')
											<h4 class="maintitle mega-title">
												<a class="text-dark" role="button"
												onclick="redirectMe('{{ $v->id }}', '{{ $v->cattype == 'primary' ? 'p' : 's' }}'); return false;">
													{{ $v->title }} <i class="playicon fa fa-play" aria-hidden="true"></i>
												</a>
											</h4>
										@endif

										@if ($v->type == 'subcategory')
											<ul style="position: relative; top: 8px;" class="mt-2 w150 description ps-0">
												<li>
													<a role="button" onclick="redirectMe('{{ $v->id }}', '{{ $v->cattype == 'subcat' ? 's' : 'c' }}'); return false;">
														{{ $v->title }}
													</a>
												</li>
											</ul>
										@endif

										@if ($v->type == 'detail')
											<span style="position: relative; top: 15px;">
												<p>{{ strlen($v->title) > 30 ? substr($v->title, 0, 30) . '...' : $v->title }}</p>
											</span>
										@endif
									@endforeach
								</div>
							@endforeach
						</div>
					</div>

					@if ($menu->bannerimage)
						<div class="text-right col-md-3"
							 style="background-position: {{ 'rtl' ? 'left top' : 'right top' }}; background-size: contain; background-repeat: no-repeat; background-image: url('{{ asset('images/menu/' . $menu->bannerimage) }}');">
							<a target="_blank" href="{{ $menu->img_link }}">
								<!-- Optionally display an image here -->
							</a>
						</div>
					@endif
				</div>
			</div>
		</div>
	@endif
</li>
@endforeach
<li>
    <a href="{{ url('/flashdeals/list') }}">
        Flash deals
    </a>
</li>
	{{-- <top-menu-d></top-menu-d> --}}
</div>


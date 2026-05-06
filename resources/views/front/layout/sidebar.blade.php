@if (!empty($sidebarcategories['categories']) && count($sidebarcategories['categories']) != 0)
<div class="side-menu animate-dropdown mb-2 header-nav-screen">
    <div class="head"><i class="icon fa fa-align-left fa-fw"></i> Categories</div>
    <nav id="collapseExample" class="collapse show megamenu-horizontal">
        <ul class="nav">
            <ul class="nav flex-column flex-nowrap overflow-hidden">
                @foreach ($sidebarcategories['categories'] as $categorie)
                
                    <li class="nav-item">
                        <div class="row">
                            <div class="col-10">
                              <a role="button" href="javascript:void(0)"
                                    onclick="redirectMe('{{ $categorie->id }}', 'p')"
                                    class="nav-link text-truncate">
                                    @if (!empty($categorie->icon))
                                        <i class="fa {{ $categorie->icon }}"></i>
                                    @endif
                                    <span class="d-inline">
                                        {{ $categorie['title'] }}
                                    </span>
                                </a>
                            </div>
                            <div class="col-2">
                              <a class="c_icon_plus float-right collapsed nav-link text-truncate"
                                  href="#submenu{{ $categorie->id }}"
                                  data-toggle="collapse">
                                  <i class="fa fa-plus-square-o"></i>
                              </a>
                          </div>
                        </div>
                            @if ($categorie->subcategory->count() > 0)
                              
                                <div id="submenu{{ $categorie->id }}" class="collapse"
                                    aria-expanded="false">
                                    <ul class="flex-column pl-2 nav">
                                        @foreach ($categorie->subcategory as $subcategory)
                                        
                                            <div class="row">
                                                <div class="col-10">
                                                    <a role="button"
                                                        class="nav-link text-truncate" href="javascript:void(0)"
                                                                 onclick="redirectMe('{{ $subcategory->id }}', 's')" >
                                                        @if (!empty($subcategory->icon))
                                                            <i
                                                                class="fa {{ $subcategory->icon }}"></i>
                                                        @endif
                                                        <span class="d-inline">
                                                            {{ $subcategory->title }}
                                                        </span>
                                                    </a>
                                                </div>
                                            
                                                @if ($subcategory->childcategory->count() > 0)
                                                    <div class="col-2">
                                                        <a class="c_icon_plus float-right collapsed nav-link text-truncate"
                                                            href="#childmenu{{ $subcategory->id }}"
                                                            data-toggle="collapse">
                                                            <i
                                                                class="fa fa-plus-square-o"></i>
                                                        </a>
                                                    </div>

                                                    <div id="childmenu{{ $subcategory->id }}"
                                                        class="collapse"
                                                        aria-expanded="false">
                                                        <ul class="flex-column nav pl-4">
                                                            @foreach ($subcategory->childcategory as $childcategory)
                                                                <li class="nav-item">
                                                                    <a role="button"
                                                                        class="nav-link p-1" href="javascript:void(0)"
                                                                        onclick="redirectMe('{{ $childcategory->id }}', 'c')">
                                                                        <i
                                                                            class="fa fa-star-o"></i>
                                                                        {{ $childcategory->title }}
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </div>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        
                    </li>
                @endforeach

                <li class="nav-item">
                  <div class="row">
                    <div class="col-10">
                      <a role="button" class="nav-link text-truncate"><i class="fa fa-book"></i>
                        <span class="d-inline">
                          Sports Book and More
                        </span></a>
                      </div>
                    <div class="col-2"><a href="#submenu5" data-toggle="collapse"
                        class="c_icon_plus float-right collapsed nav-link text-truncate"><i
                          class="fa fa-plus-square-o"></i></a>
                    </div>
                  </div>
                  <div id="submenu5" aria-expanded="false" class="collapse">
                    <ul class="flex-column pl-2 nav">
                      <div>
                        <div class="row">
                          <div class="col-10"><a role="button" class="nav-link text-truncate"><i
                                class="fa fa-soccer-ball-o"></i> <span class="d-inline">
                                Cricket and more
                              </span></a></div>
                          <!---->
                        </div>
                        <!---->
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-10"><a role="button" class="nav-link text-truncate"><i
                                class="fa fa-archive"></i> <span class="d-inline">
                                Gaming
                              </span></a></div>
                          <!---->
                        </div>
                        <!---->
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-10"><a role="button" class="nav-link text-truncate"><i
                                class="fa fa-archive"></i> <span class="d-inline">
                                PS 4 Games
                              </span></a></div>
                          <!---->
                        </div>
                        <!---->
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-10"><a role="button" class="nav-link text-truncate"><i
                                class="fa fa-book"></i> <span class="d-inline">
                                Editor's Concern
                              </span></a></div>
                          <!---->
                        </div>
                        <!---->
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-10"><a role="button" class="nav-link text-truncate"><i
                                class="fa fa-angellist"></i> <span class="d-inline">
                                Fitness &amp; Exercise
                              </span></a></div>
                          <!---->
                        </div>
                        <!---->
                      </div>
                    </ul>
                  </div>
                </li>
            </ul>
        </ul>
    </nav>
</div>
{{-- <x-sidebar-desktop :guest_price="$data['guest_price']" :login="$data['logged_in']" :lang="$data['lang']" :fallbacklang="$data['fallback_local']" :categories="$sidebarcategories['categories']" /> --}}
@else
<div class="side-menu animate-dropdown mb-2 header-nav-screen">
    <div role="button" class="head">
        <i class="icon fa fa-align-left fa-fw"></i> {{ __('staticwords.Categories') }}
    </div>

    <nav class="megamenu-horizontal">
        @for ($i = 1; $i <= 10; $i++)
            <div class="row no-gutters p-1">
                <div class="col-10">
                    <div class="skeleton skeleton-throb"></div>
                </div>
                @if ($i % 2 != 0)
                    <div class="col-2">
                        <div class="skeleton skeleton-throb float-right"
                            style="width: 80%;"></div>
                    </div>
                @endif
            </div>
        @endfor
    </nav>
</div>
@endif
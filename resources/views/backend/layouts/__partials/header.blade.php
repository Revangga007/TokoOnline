            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('header')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ $bcrum['url-first'] }}">{{$bcrum['name-first']}}</a></li>
                                @if (isset($bcrum['url-second']))
                                <li class="breadcrumb-item active"><a href="{{$bcrum['url-second']}}">{{$bcrum['name-second']}}</a></li>
                                @endif
                                <li class="breadcrumb-item">{{$bcrum['current']}}</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

@push('css')
    <style>
        /*Now the CSS*/
        /* * {
                                                                                                                                                margin: 0;
                                                                                                                                                padding: 0;
                                                                                                                                            } */
        .tree ul {
            display: flex;
            flex-wrap: nowrap;
            padding-top: 20px;
            position: relative;
            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
        }

        .tree li {
            float: left;
            text-align: center;
            list-style-type: none;
            position: relative;
            padding: 20px 5px 0 5px;
            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
        }

        /*We will use ::before and ::after to draw the connectors*/
        .tree li::before,
        .tree li::after {
            content: '';
            position: absolute;
            top: 0;
            right: 50%;
            border-top: 1px solid #ccc;
            width: 50%;
            height: 20px;
        }

        .tree li::after {
            right: auto;
            left: 50%;
            border-left: 1px solid #ccc;
        }

        /*We need to remove left-right connectors from elements without
                                                                                                                                                                                                                any siblings*/
        .tree li:only-child::after,
        .tree li:only-child::before {
            display: none;
        }

        /*Remove space from the top of single children*/
        .tree li:only-child {
            padding-top: 0;
        }

        /*Remove left connector from first child and
                                                                                                                                                                                                                right connector from last child*/
        .tree li:first-child::before,
        .tree li:last-child::after {
            border: 0 none;
        }

        /*Adding back the vertical connector to the last nodes*/
        .tree li:last-child::before {
            border-right: 1px solid #ccc;
            border-radius: 0 5px 0 0;
            -webkit-border-radius: 0 5px 0 0;
            -moz-border-radius: 0 5px 0 0;
        }

        .tree li:first-child::after {
            border-radius: 5px 0 0 0;
            -webkit-border-radius: 5px 0 0 0;
            -moz-border-radius: 5px 0 0 0;
        }

        /*Time to add downward connectors from parents*/
        .tree ul ul::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            border-left: 1px solid #ccc;
            width: 0;
            height: 20px;
        }

        .tree li a {
            border: 1px solid #ccc;
            padding: 5px 10px;
            width: 200px;
            /* height : 150px; */
            text-decoration: none;
            color: #666;
            font-family: arial, verdana, tahoma;
            font-size: 12px;
            display: inline-block;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
        }

        /*Time for some hover effects*/
        /*We will apply the hover effect the the lineage of the element also*/
        .tree li a:hover,
        .tree li a:hover+ul li a {
            background: #c8e4f8;
            color: #000;
            border: 1px solid #94a0b4;
        }

        /*Connector styles on hover*/
        .tree li a:hover+ul li::after,
        .tree li a:hover+ul li::before,
        .tree li a:hover+ul::before,
        .tree li a:hover+ul ul::before {
            border-color: #94a0b4;
        }

        /*Thats all. I hope you enjoyed it.
                                                                                                                                                                                                                    Thanks :)*/
    </style>
@endpush
<x-root-lp>
    <x-navbar-lp />
    <!-- HEADER IMAGE -->
    <header id="geografi-header" class="header-image text-white">
        <div class="header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-3">Struktur Organisasi Desa Hegarmanah</h1>
                    </div>
                </div>
            </div>
        </div>
    </header> {{-- END IMAGE --}}

    {{-- Section Deskripsi Demografi --}}
    <section>
        <div class="container">
            <div style="width: 100%;overflow:scroll;">
                <div style="width: 1666px; height:600px">
                    {{-- @dump($aa->parent->childs->whereIn('type',['kadus'])) --}}
                    <div class="tree">
                        <ul>
                            <li>
                                <a href="{{ route('data-tugas', $result->petugas->id) }}">
                                    <div>
                                        <img style="width: 60px; height:auto"
                                            src="{{ file_exists(public_path('storage/petugas/' . $result->petugas->photo)) ? asset('storage/petugas/' . $result->petugas->photo) : asset('asset-page/empty.jpg') }}"
                                            alt="">
                                            <div>
                                                <p class="my-0"><u><b>{{ strtoupper($result->name) }}</b></u></p>
                                                <p class="my-0">{{ strtoupper($result->petugas->name) }}</p>
                                            </div>
                                    </div>
                                </a>
                                <ul>
                                    @foreach ($result->childs as $a)
                                        <li>
                                            <a href="{{ route('data-tugas', $a->petugas->id) }}">
                                                <div>
                                                    <img style="width: 60px; height:auto"
                                                        src="{{ file_exists(public_path('storage/petugas/' . $a->petugas->photo)) ? asset('storage/petugas/' . $a->petugas->photo) : asset('asset-page/empty.jpg') }}"
                                                        alt="">
                                                        <div>
                                                            <p class="my-0"><u><b>{{ strtoupper($a->name) }}</b></u></p>
                                                            <p class="my-0">{{ strtoupper($a->petugas->name) }}</p>
                                                        </div>
                                                </div>
                                            </a>
                                            @if ($a->childs->isNotEmpty())
                                                <ul>
                                                    @foreach ($a->childs as $aa)
                                                        <li>
                                                            <a href="{{ route('data-tugas', $aa->petugas->id) }}">
                                                                <div>
                                                                    <img style="width: 60px; height:auto"
                                                                        src="{{ file_exists(public_path('storage/petugas/' . $aa->petugas->photo)) ? asset('storage/petugas/' . $aa->petugas->photo) : asset('asset-page/empty.jpg') }}"
                                                                        alt="">
                                                                        <div>
                                                                            <p class="my-0"><u><b>{{ strtoupper($aa->name) }}</b></u></p>
                                                                            <p class="my-0">{{ strtoupper($aa->petugas->name) }}</p>
                                                                        </div>
                                                                </div>
                                                            </a>
                                                            @if ($aa->childs->isNotEmpty())
                                                                <ul>
                                                                    @foreach ($aa->childs as $aaa)
                                                                        <li>
                                                                            <a href="#">
                                                                                {{ $aaa->name }}
                                                                            </a>
                                                                            {{-- @if ($result->childs->isNotEmpty())
                                                                                    <ul>
                                                                                        @foreach ($result->childs->whereIn('type', ['sekertaris', 'kasi']) as $kadus)
                                                                                            <li>
                                                                                                <a
                                                                                                    href="#">{{ $kadus->name }}</a>
                                                                                            </li>
                                                                                        @endforeach
                                                                                    </ul>
                                                                                @endif --}}
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                                {{-- @if ($result->childs->isNotEmpty())
                                    <ul class="kadus">
                                        @foreach ($result->childs->whereIn('type', ['kadus']) as $kadus)
                                            <li>
                                                <a href="#">{{ $kadus->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif --}}
                            </li>
                            <li>
                                <a href="">BPD</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- <img src="" alt=""> --}}
        </div>

    </section>

    <!-- End Details Section -->
    <x-footer-lp />
</x-root-lp>

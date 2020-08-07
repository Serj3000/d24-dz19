                <!-- Pager -->
                <div>
                    <ol class="foode-pager mt-50">
                        @if($params->currentPage()!=1)
                            <li><a href="{{$params->previousPageUrl()}}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Newer</a></li>
                        @endif
                    <div class="alert alert-light" role="alert">
                         Листов <span class="badge badge-dark"><i> {{$params->lastPage()}}</i></span>
                        | Лист <span class="badge badge-dark"><i> {{$params->currentPage()}}</i></span>
                    </div>
                        @if($params->currentPage()!=$params->lastPage())
                            <li><a href="{{$params->nextPageUrl()}}">Older <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                        @endif
                    </ol>
                </div>
                {{-- $params->total(): {{$params->total()}} | $params->count(): {{$params->count()}}
                $params->count(): {{$params->count()}} | $params->currentPage(): {{$params->currentPage()}} --}}
@extends("base")

@section("head")
    <title>Create Character</title>
    @parent
@stop

@section("body")
    <div class="row">
        <div class="col-md-4 col-md-offset-1 col-sm-6 carousel carousel-race hidden-xs" data-interval="false">
            <!-- Race Image slides -->
            <div class="carousel-inner" role="listbox">
                @foreach($races as $i => $race)
                <div class="item{{ ($i == 0) ? ' active' : '' }}">
                    <img class="img-race img-male" src="{{ asset('images/'.$race->male_image) }}">
                    <img class="img-race img-female" src="{{ asset('images/'.$race->female_image) }}" style="display: none;">
                    <div class="carousel-caption">
                        <h3>{{ $race->name }}</h3>
                        <p>{{ $race->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-4 col-md-offset-1 col-sm-6">
            <form role="form" method="POST" action="{{ url('/character/create') }}">
                {{ csrf_field() }}
                <input type="hidden" name="race_id" id="race_id" value="{{ $races[0]->id }}">
                <input type="hidden" name="gender" id="gender" value="male">
                <input type="hidden" name="element" id="element" value="fire">
                <input type="hidden" name="strength" id="strength" value="5">
                <input type="hidden" name="endurance" id="endurance" value="5">
                <input type="hidden" name="agility" id="agility" value="5">
                <input type="hidden" name="perception" id="perception" value="5">

                <h2>Game character</h2>
                <div class="form-group">
                    <div>
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Name" required="" autofocus="">
                    </div>
                </div>
                <div class="form-group carousel carousel-race" id="race-carousel" data-interval="false">
                    <!-- Race Name slides -->
                    <div class="carousel-inner" role="listbox">
                        @foreach($races as $i => $race)
                        <div class="item{{ ($i == 0) ? ' active' : '' }}" id="race-id-{{ $race->id }}">
                            <div class="carousel-content">
                                <h3>{{ $race->name }}</h3>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Left and right controls -->
                    <a class="left left-race carousel-control" href="#race-carousel" role="button">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="right right-race carousel-control" href="#race-carousel" role="button">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
                <div class="form-group carousel carousel-gender" id="gender-carousel" data-interval="false">
                    <!-- Gender slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active" id="male">
                            <div class="carousel-content">
                                <h3>Male</h3>
                            </div>
                        </div>
                        <div class="item" id="female">
                            <div class="carousel-content">
                                <h3>Female</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left left-gender carousel-control" href="#gender-carousel" role="button">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="right right-gender carousel-control" href="#gender-carousel" role="button">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
                
                <div class="form-group carousel carousel-element" id="element-carousel" data-interval="false">
                    <!-- Gender slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active" id="fire">
                            <div class="carousel-content">
                                <h3>Fire</h3>
                            </div>
                        </div>
                        <div class="item" id="water">
                            <div class="carousel-content">
                                <h3>Water</h3>
                            </div>
                        </div>
                        <div class="item" id="earth">
                            <div class="carousel-content">
                                <h3>Earth</h3>
                            </div>
                        </div>
                        <div class="item" id="lightning">
                            <div class="carousel-content">
                                <h3>Lightning</h3>
                            </div>
                        </div>
                        <div class="item" id="wind">
                            <div class="carousel-content">
                                <h3>Wind</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left left-element carousel-control" href="#element-carousel" role="button">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="right right-element carousel-control" href="#element-carousel" role="button">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
                
                <div class="form-group" id="stat-carousel" data-interval="false">
                    <!-- Race Stats slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-content table-responsive table-attributes">
                            <table class="table">
                                <tr>
                                    <th>Strength</th>
                                    <td class="glyphicon glyphicon-minus decStrengthStat" style='background-color:white;color:#337ab7'></td>
                                    <td id="strengthStat">{{ $race->strength }}</td>
                                    <td class="glyphicon glyphicon-plus incStrengthStat" style='background-color:white;color:#337ab7'></td>
                                </tr>
                                <tr>
                                    <th>Endurance</th>
                                    <td class="glyphicon glyphicon-minus decEnduranceStat" style='background-color:white;color:#337ab7'></td>
                                    <td id="enduranceStat">{{ $race->endurance }}</td>
                                    <td class="glyphicon glyphicon-plus incEnduranceStat" style='background-color:white;color:#337ab7'></td>
                                </tr>
                                <tr>
                                    <th>Agility</th>
                                    <td class="glyphicon glyphicon-minus decAgilityStat" style='background-color:white;color:#337ab7'></td>
                                    <td id="agilityStat">{{ $race->agility }}</td>
                                    <td class="glyphicon glyphicon-plus incAgilityStat" style='background-color:white;color:#337ab7'></td>
                                </tr>                                
                                <tr>
                                    <th>Perception</th>
                                    <td class="glyphicon glyphicon-minus decPerceptionStat" style='background-color:white;color:#337ab7'></td>
                                    <td id="perceptionStat">{{ $race->perception }}</td>
                                    <td class="glyphicon glyphicon-plus incPerceptionStat" style='background-color:white;color:#337ab7'></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>

                <div>
                    <button type="submit" class="btn btn-success btn-block">Create Character</button>
                </div>
            </form>
        </div>
    </div>

@stop

@section("footer")
    @parent

    <script src="{{ asset('js/character-create.js') }}"></script>
@stop
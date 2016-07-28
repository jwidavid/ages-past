@extends("layouts.public")

@section("content")
    <main>
        <div class="container">
            <div class="row main-wrap">
                <div class="col-xs-8 l-col">
                    <div class="content-block front-content content">
                        <div class="row">
                            <div class="col-xs-6">

                                <form action="/create-a-character" method="post">
                                    <div class="form-group">    
                                        <label>Character Name</label><br>
                                        <input type="text" name="cname" value="'.$cname.'">
                                    </div>
                                    <div class="form-group">
                                        <p>Gender</p>
                                        <label class="radio-inline">
                                        <input type="radio" name="cgender" id="inlineRadio1" value="male" > Male</label>
                                            
                                        <label class="radio-inline">
                                        <input type="radio" name="cgender" id="inlineRadio2" value="female" > Female</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Element</label>
                                        <select class="form-control" name="celement">
                                            <option value="fire">Fire</option>
                                            <option value="water">Water</option>
                                            <option value="earth">Earth</option>
                                            <option value="lightning">Lightning</option>
                                            <option value="wind">Wind</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <br><br>
                                        <input type="submit" name="create" class="g-btn-sm" value="Create the Character">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <p class="copy">&copy;Copyright Ages Past 2015</p>
            </div>
        </div>
    </main>
@stop
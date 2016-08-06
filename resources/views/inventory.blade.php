@extends("layouts.gamewrapper")

@section("content")
<div class="container-fluid game-container">
	<h1>Inventory</h1>
    <div class="row">
    	<div class="col-md-6">
            <h3 class="text-center">
                Equipped
            </h3>
            <div class="row">
                <div class="col-xs-6">
                	<p class="text-center">Weapons</p>
                	<p class="content-box">{WEAPON_EQUIPPED}</p>
                </div>
                <div class="col-xs-6">
                    <p class="text-center">Armor</p>
                	<p class="content-box">{ARMOR_EQUIPPED}</p>
                </div>
            </div>
            <h3 class="text-center">
	            Backpack
	        </h3>
            <div class="row">
                All non-equipped items go here. I would love to see a grid with each
                item being in a rectangle with an icon, name, and question mark icon
                to suggest the player can click on the item to get a drop down or I
                can have it take them to a page for that item complete with options
                (drop item, equip item, etc). In any case, you can decide how it 
                should appear, this was just an idea.
                <br><br>
                |-------|<br>
                | icon | &nbsp;&nbsp;&nbsp;Name of Item &nbsp;&nbsp;&nbsp; ( ? )<br>
                |-------|
            </div>
        </div>
    </div>
</div>
@stop

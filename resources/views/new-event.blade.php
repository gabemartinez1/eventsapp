@extends('layouts.master')

@section('title', 'New Event')

@section('navbar')
    @parent

@endsection

@section('content')
    <div class="row">
        <form class="col s12">
          
          <div class="row">
            
            <div class="input-field col s6">
              <textarea id="event_description" class="materialize-textarea"></textarea>
              <label for="event_description">Event Description</label>
            </div>
            
            <div class="input-field col s6">
              <input type="date" class="datepicker" placeholder="Date">
            </div>
              
          </div>
            
          <div class="row">
            
            <div class="input-field col s4">
              <input id="setup_time" type="text" class="validate">
              <label for="setup_time">Setup:</label>
            </div>
            
            <div class="input-field col s4">
              <input id="start_time" type="text" class="validate">
              <label for="start_time">Event Starts:</label>
            </div>
            
            <div class="input-field col s4">
                <input id="end_time" type="text" class="validate">
                <label for="end_time">Event Ends:</label>
            </div>
            
          </div>
            
          <div class="row">
            
            <div class="input-field col s6">
              <input id="cleanup_time" type="text" class="validate">
              <label for="cleanup_time">Clean Up:</label>
            </div>
            
            <div class="input-field col s6">
              <input id="entertainmentend_time" type="text" class="validate">
              <label for="entertainmentend_time">All Entertainment Ends:</label>
            </div>
            
          </div>
            
            
          <div class="row">

            <div class="input-field col s6">
              <textarea id="event-contact" class="materialize-textarea"></textarea>
              <label for="event-contact">Event Contact (Name, Department/Organization)</label>
            </div>
          
            <div class="input-field col s2">
              <p>
                <input name="event-type" type="radio" id="internal" />
                <label for="internal">Internal</label>
              </p>
              <p>
                <input name="event-type" type="radio" id="rental" />
                <label for="rental">Rental</label>
              </p>
            </div>
              
            <div class="input-field col s3">
              <input id="guest-number" type="text" class="validate">
              <label for="guest-number">Number of Guests</label>
            </div>
              
          </div>
          
          <div class="row">
            
            <div class="input-field col s4">
              <select multiple>
                <option value="" disabled selected>Spaces To Be Used</option>
                <option value="1" disabled selected>Lower Level & First Floor</option>
                <option value="2">Courtyard</option>
                <option value="3">Menschel Hall</option>
                <option value="4">Option 3</option>
                <option value="5" disabled selected>Second Floor</option>
                <option value="6">Second Floor Arcade</option>
                <option value="7">Second Floor Galleries</option>
                <option value="8" disabled selected>Third Floor</option>
                <option value="9">Third Floor Arcade</option>
                <option value="10">Third Floor Collection Galleries</option>
                <option value="11">Special Exhibitions Galleries</option>
                <option value="12" disabled selected>Fourth Floor</option>
                <option value="13">Art Study Center</option>
                <option value="14" disabled selected>Fifth Floor</option>
                <option value="15">Lightbox Gallery</option>
              </select>
            </div>
            
          </div>
          
          <div class="row">
         
            <div class="input-field col s6">
              <textarea id="ops-details" class="materialize-textarea"></textarea>
              <label for="ops-details">Ops Needs:</label>
            </div>

            <div class="input-field col s6">
              <textarea id="security-details" class="materialize-textarea"></textarea>
              <label for="security-details">Security Needs:</label>
            </div>
         
          </div>
          
          
          <div class="row">
            <div class="input-field col s6">
              <select multiple>
                <option value="" disabled selected>Entrances</option>
                <option value="Quincy">Quincy</option>
                <option value="Prescott">Prescott</option>
                <option value="Broadway">Broadway</option>
              </select>
            </div>
            
            <div class="input-field col s6">
              <textarea id="vip" class="materialize-textarea"></textarea>
              <label for="vip">VIP Prescence:</label>
            </div>
        
          </div>
          
          <div class="row">
            
            <div class="input-field col s6">
              <textarea id="parking" class="materialize-textarea"></textarea>
              <label for="parking">Parking Arrangements:</label>
            </div>
            
            <div class="input-field col s2">
              <p>
                <input name="admission-type" type="radio" id="public" />
                <label for="public">Public</label>
              </p>
              <p>
                <input name="admission-type" type="radio" id="private" />
                <label for="private">Private</label>
              </p>
            </div>
            
            <div class="input-field col s4">
              <input id="billing-code" type="text" class="validate">
              <label for="billing-code">Billing Code:</label>
            </div>
            
            
          </div>            
        

        </form>         
      </div>

@endsection

@section('footer')
    @parent



@endsection
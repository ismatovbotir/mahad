<div class="form-group">



    @if(count($courses)>0)
    <label class="form-label" for="course">Guruh
        <a>
            <span class="ni ni-plus text-success" data-toggle="modal" data-target="#courseModal"></span>
        </a>
    </label>
    <br>
    <select class="w-100" name="course" style="border:1px solid #dbdfea;border-radius:4px;background:white;padding:8px;color:#526484;">
        <option>Guruh</option>
        @foreach($courses as $course)
    
            @if($course->id==$currentCourse)
            <option value="{{$course->id}}" selected>{{$course->name}}</option>
            @else
            <option value="{{$course->id}}">{{$course->name}}</option>
            @endif
        
        @endforeach

    </select>
    @else
    <label class="form-label" for="course">Guruh </label>
    <a class="btn btn-success text-center w-100" data-toggle="modal" data-target="#courseModal">Guruh Qoshish</a>

    @endif

</div>
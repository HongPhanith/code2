<div class="form-group">
    <input class="form-control" type="text" name="name" placeholder="* name" autocomplete="off" value="{{old('name') ?? $customer->name }}">
    @error('name') <p style="color: red">{{$message}}</p> @enderror
</div>
<div class="form-group">
    <input class="form-control" type="text" name="email" placeholder="* email" autocomplete="off" value="{{ old('email') ?? $customer->email}}">
    @error('email') <p style="color: red">{{$message}}</p> @enderror
</div>

<label for="Status">Status</label>
<div class="form-group">
    <select name="active" id="active" class="form-control">
        <option value="" disabled>Select Status</option>
        @foreach ($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
    <option value=" {{ $activeOptionKey }} " {{ $customer->active == $activeOptionValue ? 'selected' : ' ' }} > {{ $activeOptionValue }}</option>
        @endforeach
    </select>
</div>

<label for="company_id">Company Id</label>
<div class="form-group">
    <select name="company_id" id="company_id" class="form-control">
        @foreach ($companies as $company)
    <option value="{{ $company->id }}" {{ $company->id == $customer->company_id ? 'selected' : ''}}> {{ $company->name }}</option>
        @endforeach
    </select>
</div>


@csrf
<button class="btn btn-primary" type="submit">Submit</button>

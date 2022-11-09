@foreach($subcategories as $subcategory)
	@if($subcategory->id != $data->id)
		<option value="{{$subcategory->id}}">-- {{$subcategory->name}}</option>
		@if(count($subcategory->subCategories))
			@include('admin.categories.child_category', ['subcategories' => $subcategory->subCategories])
		@endif
	@endif
@endforeach
@foreach($subcategories as $subcategory)
	<option value="{{$subcategory->id}}">-- {{$subcategory->name}}</option>
	@if(count($subcategory->subCategories))
		@include('admin.categories.child_category_create', ['subcategories' => $subcategory->subCategories])
	@endif
@endforeach
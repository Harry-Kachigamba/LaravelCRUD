<h1>Create Item</h1>
<form action="{{ route('items.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" required>
    <label>Description:</label>
    <textarea name="description"></textarea>
    <button type="submit">Save</button>
</form>

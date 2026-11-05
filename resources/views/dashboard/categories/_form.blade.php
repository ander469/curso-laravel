@csrf

            @include('dashboard.fragment._errors-form')

            <label for="">Title</label>
            <input type="text" name="title" value="{{ old('title', $category->title) }}">
            
            <label for="">slug</label>
            <input type="text" name="slug" value="{{ old('slug', $category->slug) }}">

            <button type="submit">Create Category</button>
        </form>
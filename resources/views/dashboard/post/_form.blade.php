@csrf

            @include('dashboard.fragment._errors-form')

            <label for="">Title</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}">
            
            <label for="">slug</label>
            <input type="text" name="slug" value="{{ old('slug', $post->slug) }}">
            
            <label for="">Content</label>
            <textarea name="content">{{ old('content', $post->content) }}</textarea>

            <label for="">Category</label>
        <select name="category_id">
            @foreach ($categories as $id => $title)
                <option {{ old('category_id', $post->category) == $id ? 'selected' : '' }} value="{{ $id }}">{{ $title }}</option>                    
            @endforeach
        </select>

            <label for="">descripcion</label>
            <textarea name="descripcion">{{ old('descripcion', $post->descripcion) }}</textarea>

            <label for="">Posted</label>
            <select name="posted">
                <option {{ old('posted', $post->posted) == 'yes' ? 'selected' : '' }} value="yes">Yes</option>
                <option {{ old('posted', $post->posted) == 'no' ? 'selected' : '' }} value="not">No</option>
            </select>
            @if (isset($task) && $task == 'edit')
                <label for="">Image</label>
                <input type="file" name="image">
                
                
            @endif

            <button type="submit">Create Post</button>
        </form>
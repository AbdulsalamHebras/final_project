<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Story</title>
</head>

<body>
    <form action="{{ route('story.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Story Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <label for="summary">Summary</label>
        <textarea name="summary" id="summary" cols="30" rows="10">{{ old('summary') }}</textarea>
        @error('summary')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <label for="writing_date">Writing Date</label>
        <input type="date" name="writing_date" id="writing_date" value="{{ old('writing_date') }}">
        @error('writing_date')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <label for="image">Story Cover Page</label>
        <input type="file" name="image" id="image" value="{{ old('image') }}">
        @error('image')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <label for="category_id">category Name</label>
        <select name="category_id" id="category_id">
            <option value="">-- select one --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <label for="authors">Authors</label>
        <div class="container tab-custom-pane fade"><br>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <div class="select2-purple">
                        <select class="select2" name="authors[]" id="authors" multiple="multiple">
                            @foreach ($authors as $author)
                                <option value="{{ $author->id }}"
                                    {{ in_array($author->id, old('authors', [])) ? 'selected' : '' }}>
                                    {{ $author->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <label for="publishing_homes">publishing Home</label>
            <div class="container tab-custom-pane fade"><br>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <div class="select2-purple">
                            <select class="select2" name="publishing_homes[]" id="publishing_homes" multiple="multiple">
                                @foreach ($publishing_homes as $publishing_home)
                                    <option value="{{ $publishing_home->id }}"
                                        {{ in_array($publishing_home->id, old('publishing_homes', [])) ? 'selected' : '' }}>
                                        {{ $publishing_home->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <label for="language">Language</label>
                <select name="language" data-placeholder="Choose a Language...">
                    <option value="">-- select one --</option>
                    <option value="Afrikaans">Afrikaans</option>
                    <option value="Albanian">Albanian</option>
                    <option value="Arabic">Arabic</option>
                    <option value="Armenian">Armenian</option>
                    <option value="Basque">Basque</option>
                    <option value="Bengali">Bengali</option>
                    <option value="Bulgarian">Bulgarian</option>
                    <option value="Catalan">Catalan</option>
                    <option value="Cambodian">Cambodian</option>
                    <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                    <option value="Croatian">Croatian</option>
                    <option value="Czech">Czech</option>
                    <option value="Danish">Danish</option>
                    <option value="Dutch">Dutch</option>
                    <option value="English">English</option>
                    <option value="Estonian">Estonian</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finnish">Finnish</option>
                    <option value="French">French</option>
                    <option value="Georgian">Georgian</option>
                    <option value="German">German</option>
                    <option value="Greek">Greek</option>
                    <option value="Gujarati">Gujarati</option>
                    <option value="Hebrew">Hebrew</option>
                    <option value="Hindi">Hindi</option>
                    <option value="Hungarian">Hungarian</option>
                    <option value="Icelandic">Icelandic</option>
                    <option value="Indonesian">Indonesian</option>
                    <option value="Irish">Irish</option>
                    <option value="Italian">Italian</option>
                    <option value="Japanese">Japanese</option>
                    <option value="Javanese">Javanese</option>
                    <option value="Korean">Korean</option>
                    <option value="Latin">Latin</option>
                    <option value="Latvian">Latvian</option>
                    <option value="Lithuanian">Lithuanian</option>
                    <option value="Macedonian">Macedonian</option>
                    <option value="Malay">Malay</option>
                    <option value="Malayalam">Malayalam</option>
                    <option value="Maltese">Maltese</option>
                    <option value="Maori">Maori</option>
                    <option value="Marathi">Marathi</option>
                    <option value="Mongolian">Mongolian</option>
                    <option value="Nepali">Nepali</option>
                    <option value="Norwegian">Norwegian</option>
                    <option value="Persian">Persian</option>
                    <option value="Polish">Polish</option>
                    <option value="Portuguese">Portuguese</option>
                    <option value="Punjabi">Punjabi</option>
                    <option value="Quechua">Quechua</option>
                    <option value="Romanian">Romanian</option>
                    <option value="Russian">Russian</option>
                    <option value="Samoan">Samoan</option>
                    <option value="Serbian">Serbian</option>
                    <option value="Slovak">Slovak</option>
                    <option value="Slovenian">Slovenian</option>
                    <option value="Spanish">Spanish</option>
                    <option value="Swahili">Swahili</option>
                    <option value="Swedish ">Swedish </option>
                    <option value="Tamil">Tamil</option>
                    <option value="Tatar">Tatar</option>
                    <option value="Telugu">Telugu</option>
                    <option value="Thai">Thai</option>
                    <option value="Tibetan">Tibetan</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Turkish">Turkish</option>
                    <option value="Ukrainian">Ukrainian</option>
                    <option value="Urdu">Urdu</option>
                    <option value="Uzbek">Uzbek</option>
                    <option value="Vietnamese">Vietnamese</option>
                    <option value="Welsh">Welsh</option>
                    <option value="Xhosa">Xhosa</option>
                </select>
                @error('language')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>
                <label for="parts">Parts</label>
                <input type="number" name="parts" id="parts" value="{{ old('parts') }}">
                @error('parts')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>
                <label for="deposit_number">Deposit Number</label>
                <input type="number" name="deposit_number" id="deposit_number" value="{{ $newStoryID + 1 }}"
                    readonly>
                @error('deposit_number')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>
                <label for="deposit_date">Deposit Date</label>
                <input type="date" name="deposit_date" id="deposit_date" value="{{ now()->format('Y-m-d') }}"
                    readonly>
                @error('deposit_date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>
                <label for="edition_number">Edition Number</label>
                <input type="number" name="edition_number" id="edition_number" value="{{ 'edition_number' }}">
                @error('edition_number')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>
                <label for="pages">Pages</label>
                <input type="number" name="pages" id="pages" value="{{ old('pages') }}">
                @error('pages')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>
                <label for="copies">Copies</label>
                <input type="number" name="copies" id="copies" value="{{ old('copies') }}">
                @error('copies')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>
                <label for="price">Price</label>
                <input type="text" name="price" id="price" value="{{ old('price') }}">
                @error('price')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>
                <input type="submit" value="Send">
    </form>
</body>

</html>

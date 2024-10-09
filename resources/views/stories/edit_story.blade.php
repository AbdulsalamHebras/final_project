<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Story</title>
</head>

<body>
    <form action="{{ route('story.update', $story->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="name">Story Name</label>
        <input type="text" name="name" id="name" value="{{ $story->name }}">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <label for="summary">Summary</label>
        <textarea name="summary" id="summary" cols="30" rows="10">{{ $story->summary }}</textarea>
        @error('summary')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <label for="writing_date">Writing Date</label>
        <input type="date" name="writing_date" id="writing_date" value="{{ $story->writing_date }}">
        @error('writing_date')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <label for="image">Story Cover Page</label>
        <input type="file" name="image" id="image" value="{{ $story->image }}">
        @error('image')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <label for="category_id">category Name</label>
        <select name="category_id" id="category_id">
            <option value="">-- select one --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $story->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <label for="authors">Authors</label>
        <select class="select2" name="authors[]" id="authors" multiple="multiple">
            @foreach ($authors as $author)
                <option value="{{ $author->id }}"
                    {{ in_array($author->id, $story->authors->pluck('id')->toArray()) ? 'selected' : '' }}>
                    {{ $author->name }}
                </option>
            @endforeach
        </select>
        @error('authors')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <label for="publishing_homes">publishing Home</label>
        <select class="select2" name="publishing_homes[]" id="publishing_homes" multiple="multiple">
            @foreach ($publishing_homes as $publishing_home)
                <option value="{{ $publishing_home->id }}"
                    {{ in_array($publishing_home->id, $story->publishingHomes->pluck('id')->toArray()) ? 'selected' : '' }}>
                    {{ $publishing_home->name }}
                </option>
            @endforeach
        </select>
        @error('publishing_homes')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <label for="language">Language</label>
        <select name="language" id="language">
            <option value="{{ $story->language }}" selected>{{ $story->language }}</option>
            <option value="">-- select a language --</option>
            <option value="Afrikaans" {{ $story->language == 'Afrikaans' ? 'hidden' : '' }}>Afrikaans</option>
            <option value="Albanian" {{ $story->language == 'Albanian' ? 'hidden' : '' }}>Albanian</option>
            <option value="Arabic" {{ $story->language == 'Arabic' ? 'hidden' : '' }}>Arabic</option>
            <option value="Armenian" {{ $story->language == 'Armenian' ? 'hidden' : '' }}>Armenian</option>
            <option value="Basque" {{ $story->language == 'Basque' ? 'hidden' : '' }}>Basque</option>
            <option value="Bengali" {{ $story->language == 'Bengali' ? 'hidden' : '' }}>Bengali</option>
            <option value="Bulgarian" {{ $story->language == 'Bulgarian' ? 'hidden' : '' }}>Bulgarian</option>
            <option value="Catalan" {{ $story->language == 'Catalan' ? 'hidden' : '' }}>Catalan</option>
            <option value="Cambodian" {{ $story->language == 'Cambodian' ? 'hidden' : '' }}>Cambodian</option>
            <option value="Chinese (Mandarin)" {{ $story->language == 'Chinese (Mandarin)' ? 'hidden' : '' }}>Chinese
                (Mandarin)</option>
            <option value="Croatian" {{ $story->language == 'Croatian' ? 'hidden' : '' }}>Croatian</option>
            <option value="Czech" {{ $story->language == 'Czech' ? 'hidden' : '' }}>Czech</option>
            <option value="Danish" {{ $story->language == 'Danish' ? 'hidden' : '' }}>Danish</option>
            <option value="Dutch" {{ $story->language == 'Dutch' ? 'hidden' : '' }}>Dutch</option>
            <option value="English" {{ $story->language == 'English' ? 'hidden' : '' }}>English</option>
            <option value="Estonian" {{ $story->language == 'Estonian' ? 'hidden' : '' }}>Estonian</option>
            <option value="Fiji" {{ $story->language == 'Fiji' ? 'hidden' : '' }}>Fiji</option>
            <option value="Finnish" {{ $story->language == 'Finnish' ? 'hidden' : '' }}>Finnish</option>
            <option value="French" {{ $story->language == 'French' ? 'hidden' : '' }}>French</option>
            <option value="Georgian" {{ $story->language == 'Georgian' ? 'hidden' : '' }}>Georgian</option>
            <option value="German" {{ $story->language == 'German' ? 'hidden' : '' }}>German</option>
            <option value="Greek" {{ $story->language == 'Greek' ? 'hidden' : '' }}>Greek</option>
            <option value="Gujarati" {{ $story->language == 'Gujarati' ? 'hidden' : '' }}>Gujarati</option>
            <option value="Hebrew" {{ $story->language == 'Hebrew' ? 'hidden' : '' }}>Hebrew</option>
            <option value="Hindi" {{ $story->language == 'Hindi' ? 'hidden' : '' }}>Hindi</option>
            <option value="Hungarian" {{ $story->language == 'Hungarian' ? 'hidden' : '' }}>Hungarian</option>
            <option value="Icelandic" {{ $story->language == 'Icelandic' ? 'hidden' : '' }}>Icelandic</option>
            <option value="Indonesian" {{ $story->language == 'Indonesian' ? 'hidden' : '' }}>Indonesian</option>
            <option value="Irish" {{ $story->language == 'Irish' ? 'hidden' : '' }}>Irish</option>
            <option value="Italian" {{ $story->language == 'Italian' ? 'hidden' : '' }}>Italian</option>
            <option value="Japanese" {{ $story->language == 'Japanese' ? 'hidden' : '' }}>Japanese</option>
            <option value="Javanese" {{ $story->language == 'Javanese' ? 'hidden' : '' }}>Javanese</option>
            <option value="Korean" {{ $story->language == 'Korean' ? 'hidden' : '' }}>Korean</option>
            <option value="Latin" {{ $story->language == 'Latin' ? 'hidden' : '' }}>Latin</option>
            <option value="Latvian" {{ $story->language == 'Latvian' ? 'hidden' : '' }}>Latvian</option>
            <option value="Lithuanian" {{ $story->language == 'Lithuanian' ? 'hidden' : '' }}>Lithuanian</option>
            <option value="Macedonian" {{ $story->language == 'Macedonian' ? 'hidden' : '' }}>Macedonian</option>
            <option value="Malay" {{ $story->language == 'Malay' ? 'hidden' : '' }}>Malay</option>
            <option value="Malayalam" {{ $story->language == 'Malayalam' ? 'hidden' : '' }}>Malayalam</option>
            <option value="Maltese" {{ $story->language == 'Maltese' ? 'hidden' : '' }}>Maltese</option>
            <option value="Maori" {{ $story->language == 'Maori' ? 'hidden' : '' }}>Maori</option>
            <option value="Marathi" {{ $story->language == 'Marathi' ? 'hidden' : '' }}>Marathi</option>
            <option value="Mongolian" {{ $story->language == 'Mongolian' ? 'hidden' : '' }}>Mongolian</option>
            <option value="Nepali" {{ $story->language == 'Nepali' ? 'hidden' : '' }}>Nepali</option>
            <option value="Norwegian" {{ $story->language == 'Norwegian' ? 'hidden' : '' }}>Norwegian</option>
            <option value="Persian" {{ $story->language == 'Persian' ? 'hidden' : '' }}>Persian</option>
            <option value="Polish" {{ $story->language == 'Polish' ? 'hidden' : '' }}>Polish</option>
            <option value="Portuguese" {{ $story->language == 'Portuguese' ? 'hidden' : '' }}>Portuguese</option>
            <option value="Punjabi" {{ $story->language == 'Punjabi' ? 'hidden' : '' }}>Punjabi</option>
            <option value="Quechua" {{ $story->language == 'Quechua' ? 'hidden' : '' }}>Quechua</option>
            <option value="Romanian" {{ $story->language == 'Romanian' ? 'hidden' : '' }}>Romanian</option>
            <option value="Russian" {{ $story->language == 'Russian' ? 'hidden' : '' }}>Russian</option>
            <option value="Samoan" {{ $story->language == 'Samoan' ? 'hidden' : '' }}>Samoan</option>
            <option value="Serbian" {{ $story->language == 'Serbian' ? 'hidden' : '' }}>Serbian</option>
            <option value="Slovak" {{ $story->language == 'Slovak' ? 'hidden' : '' }}>Slovak</option>
            <option value="Slovenian" {{ $story->language == 'Slovenian' ? 'hidden' : '' }}>Slovenian</option>
            <option value="Spanish" {{ $story->language == 'Spanish' ? 'hidden' : '' }}>Spanish</option>
            <option value="Swahili" {{ $story->language == 'Swahili' ? 'hidden' : '' }}>Swahili</option>
            <option value="Swedish" {{ $story->language == 'Swedish' ? 'hidden' : '' }}>Swedish</option>
            <option value="Tamil" {{ $story->language == 'Tamil' ? 'hidden' : '' }}>Tamil</option>
            <option value="Tatar" {{ $story->language == 'Tatar' ? 'hidden' : '' }}>Tatar</option>
            <option value="Telugu" {{ $story->language == 'Telugu' ? 'hidden' : '' }}>Telugu</option>
            <option value="Thai" {{ $story->language == 'Thai' ? 'hidden' : '' }}>Thai</option>
            <option value="Tibetan" {{ $story->language == 'Tibetan' ? 'hidden' : '' }}>Tibetan</option>
            <option value="Tonga" {{ $story->language == 'Tonga' ? 'hidden' : '' }}>Tonga</option>
            <option value="Turkish" {{ $story->language == 'Turkish' ? 'hidden' : '' }}>Turkish</option>
            <option value="Ukrainian" {{ $story->language == 'Ukrainian' ? 'hidden' : '' }}>Ukrainian</option>
            <option value="Urdu" {{ $story->language == 'Urdu' ? 'hidden' : '' }}>Urdu</option>
            <option value="Uzbek" {{ $story->language == 'Uzbek' ? 'hidden' : '' }}>Uzbek</option>
            <option value="Vietnamese" {{ $story->language == 'Vietnamese' ? 'hidden' : '' }}>Vietnamese</option>
            <option value="Welsh" {{ $story->language == 'Welsh' ? 'hidden' : '' }}>Welsh</option>
            <option value="Xhosa" {{ $story->language == 'Xhosa' ? 'hidden' : '' }}>Xhosa</option>
        </select>
        @error('language')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <br>
        <label for="parts">Parts</label>
        <input type="number" name="parts" id="parts" value="{{ $story->parts }}">
        @error('parts')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <label for="deposit_number">Deposit Number</label>
        <input type="number" name="deposit_number" id="deposit_number" value="{{ $story->deposit_number }}"
            readonly>
        @error('deposit_number')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <label for="deposit_date">Deposit Date</label>
        <input type="date" name="deposit_date" id="deposit_date" value="{{ $story->deposit_date }}" readonly>
        @error('deposit_date')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <label for="edition_number">Edition Number</label>
        <input type="number" name="edition_number" id="edition_number" value="{{ $story->edition_number }}">
        @error('edition_number')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <label for="pages">Pages</label>
        <input type="number" name="pages" id="pages" value="{{ $story->pages }}">
        @error('pages')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <label for="copies">Copies</label>
        <input type="number" name="copies" id="copies" value="{{ $story->copies }}">
        @error('copies')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <label for="price">Price</label>
        <input type="text" name="price" id="price" value="{{ $story->price }}">
        @error('price')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <input type="submit" value="Send">
    </form>
</body>

</html>

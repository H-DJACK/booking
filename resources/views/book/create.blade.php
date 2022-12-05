@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center">
  <div class="block flex items-center justify-center p-6 rounded-lg shadow-lg bg-white max-w-md">
   
    <form action="/books" enctype="multipart/form-data" method="POST">
      @csrf
      <div>
        <h1>Ajouter un Livre</h1>
      </div>
      <div class="form-group mb-6">
        <input type="text" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
          placeholder="Titre du livre"
          name="title"
          value="{{ old('title') }}"  
          autocomplete="title" autofocus
          >

          @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
      </div>

      <div class="form-group mb-6">
        <input type="text" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
          placeholder="Edition du livre"
          name="edition"
          value="{{ old('edition') }}"  
          autocomplete="edition" autofocus
          >

          @error('edition')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
      </div>

      <div class="flex justify-center">
        <div class="mb-3 xl:w-96">
          <select name="subGenre" class="form-select appearance-none
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding bg-no-repeat
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
              <option value="Nouvelle" selected>Nouvelle</option>
              <option value="Conte">Conte</option>
              <option value="Mythe">Mythe</option>
              <option value="Légende">Légende</option>
              <option value="Biographie">Biographie</option>
              <option value="Autobiographie">Autobiographie</option>
              <option value="Chronique">Chronique</option>
              <option value="Apologie">Apologie</option>
              <option value="Journal">Journal</option>
              <option value="Roman">Roman</option>
              <option value="Chanson">Chanson</option>
              <option value="Ballade">Ballade</option>
              <option value="Calligramme">Calligramme</option>
              <option value="Chant Royale">Chant Royale</option>
              <option value="Epigramme">Epigramme</option>
              <option value="Epopée">Epopée</option>
              <option value="Fantaisie">Fantaisie</option>
              <option value="Ode">Ode</option>
              <option value="Comedie">Comedie</option>
              <option value="Ballade">Ballade</option>
              <option value="Elégie">Elégie</option>
              <option value="Farce">Farce</option>
              <option value="Moraité">Moraité</option>
              <option value="Drame">Drame</option>
              <option value="Proverbe">Proverbe</option>
              <option value="Essai">Essai</option>
              <option value="Fable">Fable</option>
              <option value="Fabliau">Fabliau</option>
              <option value="Phamplet">Phamplet</option>
              <option value="Sermont">Sermont</option>

          </select>
        </div>
        @error('subGenre')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <div class="form-group mb-6">
        <textarea
        class="
          form-control
          block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
        "
        id="exampleFormControlTextarea13"
        rows="3"
        placeholder="Description du livre"
        name="description"
      > {{ old('description') }}</textarea>
        @error('description')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>

      
      <div class="form-group mb-6">
        <label for="dateOfPublication">Date de publication</label>
        <input name="dateOfPublication" type="date" id="dateOfPublication" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="dateOfPublication"
          value="{{ old('dateOfPublication') }}"
          >
          @error('dateOfPublication')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
      </div>


      <div class="flex justify-center">
        <div class="mb-3 xl:w-96">
          <select name="author" class="form-select appearance-none
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding bg-no-repeat
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
            @foreach($authors as $author)
              <option value="{{ $author->name}}">{{ $author->name}}</option>
            @endforeach
          </select>

        </div>
      </div>

      <div class="flex justify-center">
        <div class="mb-3 w-96">
          <label for="image" class="form-label inline-block mb-2 text-gray-700">Image de livre</label>
          <input name="image" class="form-control
          block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="image"
          value="{{ old('image') }}"
          >
          @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

      </div>

      <div class="flex justify-center">
        <div class="mb-3 w-96">
          <label for="document" class="form-label inline-block mb-2 text-gray-700">Importer le livre</label>
          <input name="document" class="form-control
          block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="document"
          value="{{ old('document') }}"
          >
          @error('document')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
        </div>
      </div>
    
      
      <button type="submit" class="
        w-full
        px-6
        py-2.5
        bg-blue-600
        text-white
        font-medium
        text-xs
        leading-tight
        uppercase
        rounded
        shadow-md
        hover:bg-blue-700 hover:shadow-lg
        focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
        active:bg-blue-800 active:shadow-lg
        transition
        duration-150
        ease-in-out">Enregistrer</button>
    </form>
  </div>
</div>
@endsection
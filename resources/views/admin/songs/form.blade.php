  <div class="form-group">
    <label for="title">Song Title</label>
  <input type="text" name="title" id="title" class="form-control" placeholder="ex: Wherever You Will Go" value="{{ old('title') ?? $song->title }}">
  </div>
  <div class="form-group">
    <label for="artist">Arist</label>
    <input type="text" name="artist" id="artist" class="form-control" placeholder="ex: Maroon 5" value="{{ old('artist') ?? $song->artist }}">
  </div>
  <div class="form-group">
    <label for="lyrics">Lyrics</label>
    <textarea class="form-control" name="lyrics" id="lyrics" rows="3">
      {{ old('lyrics') ?? $song->lyrics}}
    </textarea>
  </div>
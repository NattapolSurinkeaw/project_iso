@extends('backend.layouts.main')
@section('title') Create News @endsection
@section('container')

<div class="h-screen">
    <div class="mx-10 my-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">News And Events</h1>
    </div>
  
    <div class="mx-10">
      <div class="flex gap-10 mb-4">
        <div class="flex gap-2">
          <label for="namenews">Name</label>
          <input name="namenews" id="namenews" type="text">
        </div>
        <div class="flex gap-2">
          <label for="description">Description</label>
          <input name="description" id="description" type="text">
        </div>
        <input id="img_news_event" type="file">
      </div>

      <textarea id="editor"></textarea>
      <button onclick="kod()">กด</button>
      <button onclick="createNews()" class="px-3 py-1 bg-green-500 rounded-lg">save</button>
    </div>
    <div id="content"></div>
</div>

@endsection

@section('be-scripts')
<script>
  let editor; // เราจะใช้ตัวแปร editor เก็บอินสแตนซ์ของ CKEditor

  ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then(instance => {
        editor = instance; // เก็บอินสแตนซ์ของ CKEditor ในตัวแปร editor
    })
    .catch( error => {
        console.error( error );
    });

  function createNews() {
    let content = editor.getData();
    let namenews = document.querySelector('#namenews').value;
    let description = document.querySelector('#description').value;
    let inputElement = document.querySelector('#img_news_event');
    let imageFile = inputElement.files[0];

    let formData = new FormData();
    formData.append('name', namenews); 
    formData.append('description', description); 
    formData.append('content', content); 
    formData.append('img_news_event', imageFile);

    // หรือใช้ forEach
    formData.forEach((value, key) => {
      console.log(key + ': ' + value);
    });
    try {
      axios.post(`/api/backend/createnews`, formData).then((response) => {
        console.log(response);
        location.href = "/backend/newsevent"
      })
    } catch (error) {
      console.log(error);
    }
  }

  function kod(){
      if (editor) {
          let data = editor.getData(); // ดึงข้อมูลจาก CKEditor
          console.log(data);
          let content = document.querySelector('#content');
          content.innerHTML = data;
      } else {
          console.error('CKEditor instance is not available yet.');
      }
  }
</script>
@endsection
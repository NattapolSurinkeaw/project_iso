@extends('backend.layouts.main')
@section('title') Edit News @endsection
@section('container')

<div class="h-screen overflow-y-scroll">
    <div class="mx-10 my-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">News And Events</h1>
    </div>
    <div class="mx-10">
      <div class="flex gap-10 mb-4">
        <div class="flex flex-col gap-2">
          <label for="namenews">Name</label>
          <input name="namenews" id="namenews" type="text" value="{{$news->name}}">
        </div>
        <div class="flex flex-col gap-2">
          <label for="description">Description ไม่เกิน (120 ตัวอักษร)</label>
          <input name="description" id="description" type="text" value="{{$news->description}}">
        </div>
        <div class="flex flex-col gap-2">
          <label for="img_news_event">รูปภาพขนาดไม่เกิน (2MB) </label>
          <input id="img_news_event" name="img_news_event" type="file">
        </div>
      </div>

      <div>
        <label for="content"></label>
        <textarea name="content" id="editor">{{$news->content}}</textarea>
      </div>
      <div class="flex justify-end my-4">
        <button onclick="editNews()" class="px-4 py-2 text-white bg-green-500 rounded-lg">save</button>
      </div>
    </div>
</div>

@endsection

@section('be-scripts')
<script>
  let editor; // เราจะใช้ตัวแปร editor เก็บอินสแตนซ์ของ CKEditor
  const newsid = {{$news->id}};
  console.log(newsid)

  ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then(instance => {
        editor = instance; // เก็บอินสแตนซ์ของ CKEditor ในตัวแปร editor
    })
    .catch( error => {
        console.error( error );
    });

  function editNews() {
    let content = editor.getData();
    let namenews = document.querySelector('#namenews').value;
    let description = document.querySelector('#description').value;
    let inputElement = document.querySelector('#img_news_event');
    let imageFile = inputElement.files[0];

    if (!namenews || !description || description.length > 120) {
      Swal.fire({
        position: 'center',
        icon: 'warning',
        title: 'Please fill in the information correctly.',
        showConfirmButton: true,
      })
    }

    let formData = new FormData();
    formData.append('name', namenews); 
    formData.append('description', description); 
    formData.append('content', content); 
    formData.append('img_news_event', imageFile);

    // หรือใช้ forEach
    
    try {
      axios.post(`/api/backend/editnews/${newsid}`, formData).then((response) => {
        console.log(response);
        if(response.status = "success"){
          Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1000
          }).then(() => {
            location.href = "/backend/newsevent"
          })
        }
      })
    } catch (error) {
      console.log(error);
    }
  }
</script>
@endsection
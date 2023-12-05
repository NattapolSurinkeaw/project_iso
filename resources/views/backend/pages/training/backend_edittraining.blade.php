@extends('backend.layouts.main')
@section('title') Edit Training @endsection
@section('container')

<div class="h-screen">
    <div class="mx-10 my-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">Edit Training Course</h1>
    </div>
    {{-- {{$training}} --}}
    <div class="mx-10 p-4 border flex items-center gap-4">
      <h1 class="text-lg">Module Training</h1>
      <select class="w-40" name="moduletrain" id="moduletrain">
        @foreach($modules as $module)
        <option value="{{$module->id}}" {{$module->id == $training->module_id ? 'selected' : ''}}>
          {{$module->name}}
        </option>
        @endforeach
      </select>
      <button id="addModule" class="px-3 py-1 bg-green-500 text-white rounded-lg" onclick="addModule()">add</button>
      <button id="editModule" class="px-3 py-1 bg-yellow-500 text-white rounded-lg" onclick="editModule()">Edit</button>
      <button id="delModule" class="px-3 py-1 bg-red-500 text-white rounded-lg" onclick="delModule()">delete</button>
    </div>
  
    <div class="mx-10 mt-4">
      <div class="flex justify-between gap-10 mb-4">
          <div class="w-full flex flex-col gap-2">
            <label for="codetrain">Code</label>
            <input name="codetrain" class="w-full" id="codetrain" type="text" value="{{$training->code}}">
          </div>
          <div class="w-full flex flex-col gap-2">
            <label for="nametrain">Training Name ไม่เกิน (120 ตัวอักษร)</label>
            <input name="nametrain" class="w-full" id="nametrain" type="text" value="{{$training->name}}">
          </div>
          <div class="w-full flex flex-col gap-2">
            <label for="daytrain">Many Day</label>
            <input name="daytrain" class="w-full" id="daytrain" type="number" value="{{$training->day}}">
          </div>
      </div>

      <div class="flex justify-between gap-10 mb-4">
        <div class="w-full flex flex-col gap-2">
          <label for="feetrain">Fee</label>
          <input name="feetrain" class="w-full" id="feetrain" type="number" value="{{$training->fee}}">
        </div>
        <div class="w-full flex flex-col gap-2">
          <label for="datetrain">Date training</label>
          <input name="datetrain" class="w-full" id="datetrain" type="date" value="{{$training->date}}">
        </div>
        <div class="w-full flex flex-col gap-2">
          <label for="img_training">รูปภาพขนาดไม่เกิน (2MB) </label>
          <input id="img_training" name="img_training" type="file">
        </div>
    </div>

      <div>
        <label for="content" class="mb-4">detail training</label>
        <textarea name="content" id="editor" >{{$training->training_detail}}</textarea>
      </div>

      <div class="flex justify-end my-4 gap-4">
        <button id="backTotrain"  class="px-5 py-2 text-white bg-red-500 rounded-lg">back</button>
        <button onclick="editTraining({{$training->id}})" class="px-5 py-2 text-white bg-green-500 rounded-lg">save</button>
      </div>
    </div>
</div>

@endsection

@section('be-scripts')
{{-- @vite('resources/js/backend/global_overflow/main_overflow.js') --}}
<script>
  // let modules = {!! json_encode($modules) !!};
  // console.log(modules)
  backTotrain.onclick = () => {
    location.href = "/backend/training";
  }
  
  function addModule() {
    Swal.fire({
              title: "add Module",
              html: ` <input type="text" id="module" class="swal2-input" placeholder="Module Name">
                    `,
              confirmButtonText: "Submit",
              focusConfirm: false,
              preConfirm: () => {
                const module = Swal.getPopup().querySelector("#module").value;

                  if (!module) {
                      Swal.showValidationMessage(`Please enter your data.`);
                      return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
                  }

                  param = {
                    module: module
                  }

                  return param;
              },
          }).then((result) => {
              if (result.isConfirmed) {
                  axios.post(`/api/backend/createmodule`, result.value)
                      .then((response) => {
                          Swal.fire({
                              position: 'center',
                              icon: 'success',
                              title: 'Your work has been saved',
                              showConfirmButton: false,
                              timer: 1000
                          }).then(() => {
                              location.reload()
                          });
                      })
                      .catch((error) => {
                          console.error('API Error:', error);
                      });
              }
          });
  }

  function editModule() {
    const module = document.querySelector('#moduletrain').value;
    axios.get(`/api/backend/module/${module}`).then((response) => {
      let datamodule = response.data.data;
      // console.log(datamodule);
      Swal.fire({
              title: "edit Module",
              html: ` <input type="text" id="module" class="swal2-input" value="${datamodule.name}" placeholder="Module Name">
                    `,
              confirmButtonText: "Submit",
              focusConfirm: false,
              preConfirm: () => {
                const module = Swal.getPopup().querySelector("#module").value;

                  if (!module) {
                      Swal.showValidationMessage(`Please enter your data.`);
                      return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
                  }

                  param = {
                    module: module
                  }

                  return param;
              },
          }).then((result) => {
              if (result.isConfirmed) {
                axios.put(`/api/backend/editmodule/${module}`, result.value)
                  .then((response) => {
                      Swal.fire({
                          position: 'center',
                          icon: 'success',
                          title: 'Your work has been saved',
                          showConfirmButton: false,
                          timer: 1000
                      }).then(() => {
                          location.reload()
                      });
                  })
                  .catch((error) => {
                      console.error('API Error:', error);
                  });
              }
          });
    })
  }

  function delModule() {
    const module = document.querySelector('#moduletrain').value;
    // console.log(module)
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        axios.delete(`/api/backend/delmodule/${module}`).then((response) => {
          console.log(response);
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        })
      }
    })
  }



  let editor; // เราจะใช้ตัวแปร editor เก็บอินสแตนซ์ของ CKEditor

  ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then(instance => {
        editor = instance; // เก็บอินสแตนซ์ของ CKEditor ในตัวแปร editor
        instance.editing.view.change(writer => {
            writer.setStyle('min-height', '400px', instance.editing.view.document.getRoot());
            writer.setStyle('max-height', '400px', instance.editing.view.document.getRoot());
            writer.setStyle('max-width', '100%', instance.editing.view.document.getRoot());
        });
    })
    .catch( error => {
        console.error( error );
    });

  function editTraining(train_id) {
    const numModule = document.querySelector('#moduletrain').value;
    let detail = editor.getData();
    let code = document.querySelector('#codetrain').value;
    let nametrain = document.querySelector('#nametrain').value;
    let day = document.querySelector('#daytrain').value;
    let fee = document.querySelector('#feetrain').value;
    let date = document.querySelector('#datetrain').value;
    let inputElement = document.querySelector('#img_training');
    let imgTraining = inputElement.files[0];

    if (!numModule || !code ||!nametrain || !day || !fee || !date ) {
      Swal.fire({
        position: 'center',
        icon: 'warning',
        title: 'Please fill in the information correctly.',
        showConfirmButton: true,
      })
      return;
    }

    let formData = new FormData();
    formData.append('module', numModule); 
    formData.append('code', code); 
    formData.append('name', nametrain); 
    formData.append('training_detail', detail); 
    formData.append('day', day); 
    formData.append('fee', fee); 
    formData.append('date', date); 
    formData.append('img_training', imgTraining);

    // หรือใช้ forEach
    // formData.forEach((value, key) => {
    //   console.log(key + ': ' + value);
    // });
    try {
      axios.post(`/api/backend/edittrain/${train_id}`, formData).then((response) => {
        console.log(response);
        if(response.status = "success"){
          Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
          }).then(() => {
            location.href = "/backend/training"
          })
        }
      })
    } catch (error) {
      console.log(error);
    }
  }
</script>
@endsection
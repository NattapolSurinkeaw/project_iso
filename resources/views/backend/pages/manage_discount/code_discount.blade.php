@extends('backend.layouts.main')
@section('title') Manage Discount @endsection
@section('container')

<div class="h-screen mb-4">
  <div class="w-[95%] flex flex-col gap-5">

    <div class="mx-10 my-4 flex justify-between items-center">
      <h2 class="text-xl font-bold">Manage Discount</h2>
    </div>

    <div class="flex gap-4 ml-2">
      <div class="w-full h-[200px] max-w-[300px] bg-white rounded-lg">
        <h2 class="text-center text-xl bg-gray-400 py-2 rounded-t-lg">ส่วนลดทั้งหมด</h2>
        <div class="flex flex-col gap-4 my-1">
          <button id="btn-list" class="py-2 border-l-4 border-blue-500 bg-[#1e9dea17]">เปิดใช้งาน</button>
        </div>
      </div>

      <div class="w-full h-[500px] bg-white border-t-4 border-indigo-500 overflow-hidden rounded-lg">
        <div class="m-4" id="list-message">
          <div class="flex justify-between">
            <h2 class="text-xl font-bold mb-2">Discount</h2>
            <button id="create_discount" class="text-xl font-bold mb-2 bg-green-600 hover:bg-green-500 text-white rounded-md p-1">Create</h2>
          </div>
          <div class="flex flex-col 2xl:justify-center gap-4">
            @foreach($discount as $dis)
            <div id="message" class="bg-[#f4f4f4] w-full grid grid-cols-[1fr,80px,100px,100px,1fr,1fr,1fr] gap-4 p-2 rounded-lg" style="filter: drop-shadow(0px 0px 2px rgba(7, 49, 88, 0.4));">
              <div>{{$dis->code}}</div>
              <div>ลด {{$dis->discount}} %</div>
              <div>ใช้ไป {{($dis->used_count)? $dis->used_count: 0}} ครั้ง</div>
              <div> {!! ($dis->display == 1) ? '<p style="color:green">เปิดใช้งาน</p>' : '<p style="color:red">ปิดใช้งาน</p>' !!} </div>
              <div>วันเริ่ม {{$dis->date_start}}</div>
              <div>วันหมดอายุ {{$dis->date_expire}}</div>
              <div class="flex items-center gap-2">
                <button id="edit_discount" data-id="{{$dis->id}}" class="w-[50px] h-[30px] text-white rounded-md bg-yellow-500">แก้ไข</button>
                <button id="delete_discount" data-id="{{$dis->id}}" class="w-[50px] h-[30px] text-white rounded-md bg-red-500">ลบ</button>
              </div>
            </div>
            @endforeach 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@section('be-scripts')
<script>
    const edit_discount = document.querySelectorAll('#edit_discount')
    const delete_discount = document.querySelectorAll('#delete_discount')
    const follow = document.querySelector('#follow')
    const btn_list = document.querySelector('#btn-list')
    const list_message = document.querySelector('#list-message')
    const message_detail = document.querySelector('#message-detail');

    edit_discount.forEach(element => {
      element.addEventListener('click', () => {
        const data_id = element.getAttribute('data-id');
        contentMessage(data_id)
      })
    });

    delete_discount.forEach(element => {
      element.addEventListener('click', () => {
        const data_id = element.getAttribute('data-id');
        deleteDiscount(data_id)
      })
    });

    // follow.addEventListener('click', () => {
    //   updateMessage()
    // })
    create_discount.onclick = () => {
      Swal.fire({
            title: "Create discount",
            html: `
                    <div class="flex flex-col gap-4">
                      <div class="flex gap-2">
                        <label class="w-[100px]" for="date-start">Code</label>
                        <input id="code" type="text" class="w-3/5 border border-gray-300 rounded-md uppercase">
                      </div>

                      <div class="flex gap-2">
                        <label class="w-[100px]" for="date-start">ส่วนลด %</label>
                        <input id="discount" type="number" class="w-3/5 border border-gray-300 rounded-md" maxlength="3">
                      </div>

                      <div class="flex gap-2">
                        <label class="w-[100px]" for="date-start">สถานะ</label>
                        <select name="" id="display" class="w-3/5 border border-gray-300 rounded-md">
                          <option value="1">เปิดใช้งาน</option>
                          <option value="0">ปิดใช้งาน</option>
                        </select>
                      </div>

                      <div class="flex gap-2">
                        <label class="w-[100px]" for="date-start">วันที่เริ่ม</label>
                        <input id="data-start" type="date" class="w-3/5 border border-gray-300 rounded-md">
                      </div>

                      <div class="flex gap-2">
                        <label class="w-[100px]" for="date-start">วันที่หมดอายุ</label>
                        <input id="data-expire" type="date" class="w-3/5 border border-gray-300 rounded-md">
                      </div>

                    </div>
                    `,
            confirmButtonText: "Submit",
            focusConfirm: false,
            preConfirm: () => {
              const code = Swal.getPopup().querySelector("#code").value;
              const discount = Swal.getPopup().querySelector("#discount").value;
              const display = Swal.getPopup().querySelector("#display").value;
              const date_start = Swal.getPopup().querySelector("#data-start").value;
              const date_expire = Swal.getPopup().querySelector("#data-expire").value;

              if (!code) {
                Swal.showValidationMessage(`Please enter your data.`);
                return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
              }
          
              let param = {
                code : code,
                discount : discount,
                display : display,
                date_start: date_start,
                date_expire: date_expire
              }

              return param;
            },
          }).then((result) => {
            if (result.isConfirmed) {

              axios.post(`/api/backend/creatediscount`, result.value)
              .then((response) => {
              Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Your work has been saved',
                  showConfirmButton: false,
                  timer: 1000
              }).then( () => {
                  location.reload()
              });
              })
              .catch((error) => {
                  console.error('API Error:', error);
                  // จัดการข้อผิดพลาด
              });
            }
          });
    }

    btn_list.addEventListener('click', () => {
      message_detail.classList.add('hidden')
      list_message.classList.remove('hidden')
    })

    function contentMessage(data_id) {

      axios.get(`/api/backend/getdiscount/${data_id}`).then((response) => {
        let data = response.data.data;
        console.log(data)
        if(response.data.status == 'success') {
          Swal.fire({
            title: "Create discount",
            html: `
                    <div class="flex flex-col gap-4">
                      <div class="flex gap-2">
                        <label class="w-[100px]" for="date-start">Code</label>
                        <input id="code" type="text" class="w-3/5 border border-gray-300 rounded-md uppercase" value="${data.code}">
                      </div>

                      <div class="flex gap-2">
                        <label class="w-[100px]" for="date-start">ส่วนลด %</label>
                        <input id="discount" type="number" class="w-3/5 border border-gray-300 rounded-md" value="${data.discount}" maxlength="3">
                      </div>

                      <div class="flex gap-2">
                        <label class="w-[100px]" for="date-start">สถานะ</label>
                        <select name="" id="display" class="w-3/5 border border-gray-300 rounded-md">
                          <option value="1" ${data.display == true ? 'selected' : ''}>เปิดใช้งาน</option>
                          <option value="0" ${data.display == false ? 'selected' : ''}>ปิดใช้งาน</option>
                        </select>
                      </div>

                      <div class="flex gap-2">
                        <label class="w-[100px]" for="date-start">วันที่เริ่ม</label>
                        <input id="data-start" type="date" class="w-3/5 border border-gray-300 rounded-md" value="${data.date_start}">
                      </div>

                      <div class="flex gap-2">
                        <label class="w-[100px]" for="date-start">วันที่หมดอายุ</label>
                        <input id="data-expire" type="date" class="w-3/5 border border-gray-300 rounded-md" value="${data.date_expire}">
                      </div>

                    </div>
                    `,
            confirmButtonText: "Submit",
            focusConfirm: false,
            preConfirm: () => {
              const code = Swal.getPopup().querySelector("#code").value;
              const discount = Swal.getPopup().querySelector("#discount").value;
              const display = Swal.getPopup().querySelector("#display").value;
              const date_start = Swal.getPopup().querySelector("#data-start").value;
              const date_expire = Swal.getPopup().querySelector("#data-expire").value;

              if (!code) {
                Swal.showValidationMessage(`Please enter your data.`);
                return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
              }
          
              let param = {
                code : code,
                discount : discount,
                display : display,
                date_start: date_start,
                date_expire: date_expire
              }

              return param;
            },
          }).then((result) => {
            if (result.isConfirmed) {

              axios.put(`/api/backend/editdiscount/${data.id}`, result.value)
              .then((response) => {
              Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Your work has been saved',
                  showConfirmButton: false,
                  timer: 1000
              }).then( () => {
                  location.reload()
              });
              })
              .catch((error) => {
                  console.error('API Error:', error);
                  // จัดการข้อผิดพลาด
              });
            }
          });
        }
      })
    }

  function deleteDiscount(id) {
    console.log(id)
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        axios.delete(`/api/backend/deletediscount/${id}`).then((response) => {
          console.log(response.status);
          if (response.status = 200) {
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            ).then(() => {
              location.reload()
            })
          } else {
            Swal.fire(
              'Error!',
              'Delete failed some think wrong.',
              'error'
            )
          }
        })
      }
    })
  }

</script>
@endsection
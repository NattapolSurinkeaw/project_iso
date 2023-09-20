@extends('layouts.main')
@section('title') TrainingForm @endsection
@section('content')
<div class="pt-10">
    {{-- @dd($courses) --}}
    <div class="w-full max-w-[1080px] mx-auto mt-5 px-6 pt-6">
        <div class="bg-[#fff] w-full p-6 pt-5 drop-shadow-2xl rounded-xl">
            <div class="items-center w-full mt-6 mb-6">
                <p class="text-gray-600 text-2xl font-bold text-center">Request For Quote</p>
                <p class="text-gray-600 text-l text-center"> คำขอใบเสนอราคาการฝึกอบรม</p>
                <p class="text-gray-600 text-xl text-center">(In-house training)</p>
            </div>
            <hr class="mb-3">

            <p class="text-gray-600 text-xl font-bold ">Issue to: </p>
            <p class="text-gray-600 text-l mb-4">ออกให้ </p>
            
            <div class="w-full">
                <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="rep-address">Company</label>
                <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4  leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="company" type="text">
            </div>
            <div class="w-full">
                <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="address">Address</label>
                <textarea class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4  leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="address" type="text"></textarea>
            </div>

            <div class="flex gap-4">
                <div class="w-full md:w-1/2 mb-6 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="tax-id">Contact</label>
                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white"
                        id="contact" type="text">
                    {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                </div>
                <div class="w-full md:w-1/2">
                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="position">Position</label>
                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="position" type="text">
                </div>
            </div>



            <div class="flex gap-4">
                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone">Phone</label>
                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="phone" maxlength="10" type="text">
                </div>

                <div class="w-full md:w-1/3 mb-4 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">E-mail</label>
                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="email" type="email">
                </div>

                <div class="w-full md:w-1/3 mb-4 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="fax">Fax</label>
                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="fax" type="text">
                </div>
            </div>

            <div class="flex justify-between mt-6">
                <p class="text-gray-600 text-xl font-bold ">Billing to: </p>
                <div class="flex items-center mb-2 mt-2">
                    <input onclick="coppy()" id="cop-above" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                    <label for="cop-above" class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-500">Same as above address</label>
                </div>
            </div>
            <!-- คัดลอกข้างบน -->

            <p class="text-gray-600 text-l mb-4">ออกใบเสร็จรับเงินให้ </p>
            <div class="flex mb-4">
                <div class="w-full">
                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="rep-company">Company</label>
                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4  leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="bil-company" type="text">
                </div>
            </div>
            <div class="flex mb-4">
                <div class="w-full">
                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="rep-address">
                        Address
                    </label>
                    <textarea class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4  leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="bil-address" type="text"></textarea>
                </div>
            </div>

            <div class="flex gap-4 mt-4">
                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="tax-id">
                        Tax ID
                    </label>
                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="bil-tax-id" type="text">
                    {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                </div>
                <div class="w-full md:w-1/3">
                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="rep-contact">
                        Contact
                    </label>
                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="bil-contact" type="text">
                </div>
                <div class="w-full md:w-1/3">
                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2"for="title">
                        Title
                    </label>
                    <input
                        class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="bil-title" type="text">
                </div>
            </div>



            <div class="flex gap-4 mb-4">
                <div class="w-full md:w-1/3 mb-4 md:mb-0">
                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="rep-phone">
                        Phone
                    </label>
                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="bil-phone" type="text" maxlength="10">
                </div>
                <div class="w-full md:w-1/3 mb-4 md:mb-0">
                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="rep-email">E-mail</label>
                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="bil-email" type="email">
                </div>
                <div class="w-full md:w-1/3 mb-4 md:mb-0">
                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="bil-fax">Fax</label>
                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="bil-fax" name="bil-fax" type="text">
                </div>
            </div>

            <p class="text-gray-600 text-xl font-bold mt-5">Request for training course : </p>
            <p class="text-gray-600 text-l mb-4">ระบุหลักสูตรที่ต้องการ </p>
            <textarea class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="training-reserve" type="text"  disabled>{{$course->name}}</textarea>
            <div class="flex gap-4 mb-4 mt-4">
                <div class="w-full md:w-1/2 mb-6 md:mb-0">
                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="number-participants">
                        The number of participants
                    </label>
                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="number-participants" name="number-participants" type="number">
                    {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                </div>
                <div class="w-full md:w-1/2 ">
                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="date-reserve">
                        Requires date of training
                    </label>
                    @if(request('date'))
                    <input
                        class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="date-reserve" name="date-reserve" type="date" value="{{ request('date') }}">
                    @endif
                </div>
            </div>

            <h1 class="text-gray-600 text-xl font-bold mt-5">Request for other courses : </h1>
            <div class="flex justify-between">
                <!-- ปุ่มเพิ่ม course -->
                <p class="text-gray-600 text-l mb-4">ระบุหลักสูตรอื่น ๆ (หากมี) </p>
                <box-icon name='plus-medical' class="cursor-pointer p-1 rounded-md hover:bg-orange-300" onclick="addOtherCourses()"></box-icon>
            </div>
            <div class="flex justify-between gap-4 mb-2">
                <div class="w-full md:w-0 mx-3 mb-6 md:mb-0 mt-5">
                    <input id="check-reserve" type="checkbox" value="" class="w-5 h-10 text-blue-600 bg-gray-100 border-gray-300 rounded">
                </div>
                <div class="w-full md:w-3/5 mb-6 md:mb-0">
                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="other-course">
                        course
                    </label>
                    <div class="relative">
                        <select class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="other-course" id="other-course">
                            <option value="">other course</option>
                            @foreach($courses as $rowcourse)
                            <option value="{{$rowcourse->id}}">{{$rowcourse->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="w-full md:w-[37%] mb-6 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2">
                        required date
                    </label>
                    @if(request('date'))
                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="other-date-reserve" value="{{ request('date') }}" type="date">
                    @endif
                </div>
            </div>
            <div id="block-other-train"></div>

            <p class="text-gray-600 text-xl font-bold mt-5">Special requisition : </p>
            <p class="text-gray-600 text-l mb-4">ข้อเสนอหรือความต้องการพิเศษใด ๆ </p>
            <textarea
                class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="special-request" type="text"></textarea>

            <p class="text-gray-600 text-xl font-bold mt-4">ลงนาม : </p>
            <div class="flex gap-4">
                <div class="w-full md:w-1/2 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                        Name
                    </label>
                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="reserve-name" type="text">
                </div>

                <div class="w-full md:w-1/2 md:mb-0">
                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Position
                    </label>
                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="reserve-position" type="text">
                </div>
                <div class="w-full md:w-1/2 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                        Mobile
                    </label>
                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="reserve-tel" maxlength="10" type="text">
                </div>

                <div class="w-full md:w-1/2 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        E-mail
                    </label>
                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="reserve-email" type="email">
                </div>
            </div>

        </div> {{-- endbox --}}
    </div>

    <div class="flex justify-center mb-4">
        <button id="btnSubmit" type="summit" class="mt-4 text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-md px-5 py-2 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">send</button>
    </div>
</div>

<div id="loading-modal" class="w-full h-full bg-black opacity-80 fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="flex flex-col justify-center items-center  modal-content bg-white p-4 rounded-lg shadow-lg">
        <div class="animate-spin loader border-t-4 border-blue-500 rounded-full h-12 w-12"></div>
        <p class="mt-2">Loading...</p>
    </div>
</div>

@endsection
@section('scripts')
<script>

    let course = {!! $courses !!}
    let btnSubmit = document.querySelector('#btnSubmit');
    const loadingModal = document.getElementById('loading-modal');
    btnSubmit.addEventListener('click', () => {
        reserveTraining()
    })

    document.getElementById('reserve-tel').addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
    document.getElementById('bil-phone').addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
    document.getElementById('phone').addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    function reserveTraining() {
        const otherCourses = document.querySelectorAll('#other-course');
        const otherDates = document.querySelectorAll('#other-date-reserve');
        const otherReservations = [];

        for (let i = 0; i < otherCourses.length; i++) {
            const course = otherCourses[i].value;
            const date = otherDates[i].value;

            // เพิ่มเงื่อนไขเช็คว่า course ไม่เป็นค่าว่าง
            if (course.trim() !== '') {
                const reservation = {
                    othercourse: course,
                    otherdatereserve: date
                };

                otherReservations.push(reservation);
            }
        }

        console.log(otherReservations);
        
        function getValueById(id) {
            return document.querySelector(`#${id}`).value;
        }

        let reserve_name = getValueById('reserve-name');
        let reserve_position = getValueById('reserve-position');
        let reserve_tel = getValueById('reserve-tel');
        let reserve_email = getValueById('reserve-email');

        let reqCoruse = {!! $course !!}
        console.log(reqCoruse)
        let param = {
            company: getValueById('company'),
            address: getValueById('address'),
            contact: getValueById('contact'),
            position: getValueById('position'),
            phone: getValueById('phone'),
            email: getValueById('email'),
            fax: getValueById('fax'),

            bil_company: getValueById('bil-company'),
            bil_address: getValueById('bil-address'),
            bil_tax_id: getValueById('bil-tax-id'),
            bil_contact: getValueById('bil-contact'),
            bil_title: getValueById('bil-title'),
            bil_phone: getValueById('bil-phone'),
            bil_email: getValueById('bil-email'),
            bil_fax: getValueById('bil-fax'),
            
            training_reserve: getValueById('training-reserve'),
            code_train : reqCoruse.code,
            fee_train : reqCoruse.fee,
            number_participants: getValueById('number-participants'),
            date_reserve: getValueById('date-reserve'),

            otherReservations: otherReservations,
            
            special_request : getValueById('special-request'),
            reserve_name: reserve_name,
            reserve_position: reserve_position,
            reserve_tel: reserve_tel,
            reserve_email: reserve_email
        };
        console.log(param)
        loadingModal.classList.remove('hidden');
        // return false;
        axios.post(`/api/reserve-training`, param)
            .then((response) => {
                console.log(response.data.status);
                if (response.data.status === 'success') {
                    loadingModal.classList.add('hidden');

                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Your work has been saved',
                    }).then(() => {
                        location.href = "/reserve_success";
                    });
                }
            })
        .catch((error) => {
            console.error(error);

            // ซ่อน Modal Loading ในกรณีที่เกิดข้อผิดพลาด
            loadingModal.classList.add('hidden');

            // แสดงข้อความหรือการแจ้งเตือนเพิ่มเติมในกรณีที่เกิดข้อผิดพลาด
            // Swal.fire({
            //     position: 'center',
            //     icon: 'error',
            //     title: 'An error occurred',
            //     text: 'Something went wrong!',
            // });
        });
    }


    function addOtherCourses(){
        console.log("addcourse")
        const newInputContainer = document.createElement('div');
        newInputContainer.classList.add('flex', 'gap-4', 'mb-2');

        // สร้าง element ของ div ที่บรรจุ checkbox
        const checkboxDiv = document.createElement('div');
        checkboxDiv.classList.add('w-full', 'mx-3', 'md:w-0','mb-6', 'md:mb-0', 'mt-5');

        // สร้าง element ของ checkbox
        const checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.value = '';
        checkbox.classList.add('w-5', 'h-10', 'text-blue-600', 'bg-gray-100', 'border-gray-300', 'rounded');

        // เพิ่ม checkbox ใน checkboxDiv
        checkboxDiv.appendChild(checkbox);

        // สร้าง element ของ div ที่บรรจุเลือก course
        const selectDiv = document.createElement('div');
        selectDiv.classList.add('w-full', 'md:w-3/5','mb-6', 'md:mb-0');

        // สร้าง element ของ label สำหรับเลือก course
        const selectLabel = document.createElement('label');
        selectLabel.classList.add('block', 'tracking-wide', 'text-gray-700', 'text-xs', 'font-bold', 'mb-2');
        selectLabel.htmlFor = 'other-course';
        selectLabel.textContent = 'course';

        // สร้าง element ของ div ที่บรรจุ select element
        const selectContainer = document.createElement('div');
        selectContainer.classList.add('relative');

        // สร้าง element ของ select element
        const select = document.createElement('select');
        select.classList.add('block', 'w-full', 'bg-gray-200', 'border', 'border-gray-200', 'text-gray-700', 'py-2', 'px-4', 'pr-8', 'rounded', 'leading-tight', 'focus:outline-none', 'focus:bg-white', 'focus:border-gray-500');
        select.id = 'other-course';
        select.name = 'other-course';
        course.forEach(courseItem => {
            const option = document.createElement('option');
            option.text = courseItem.name;
            option.value = courseItem.id;
            select.appendChild(option);
        });

        selectContainer.appendChild(select);

        // เพิ่ม selectLabel และ selectContainer ใน selectDiv
        selectDiv.appendChild(selectLabel);
        selectDiv.appendChild(selectContainer);

        // สร้าง element ของ div ที่บรรจุ input date
        const dateDiv = document.createElement('div');
        dateDiv.classList.add('w-full', 'md:w-[37%]', 'mb-6', 'md:mb-0');

        // สร้าง element ของ label สำหรับ input date
        const dateLabel = document.createElement('label');
        dateLabel.classList.add('block', 'tracking-wide', 'text-gray-700', 'text-xs', 'font-bold', 'mb-2');
        dateLabel.htmlFor = 'other-date-reserve';
        dateLabel.textContent = 'required date';

        // สร้าง element ของ input date
        const dateInput = document.createElement('input');
        dateInput.classList.add('block', 'w-full', 'bg-gray-200', 'text-gray-700', 'border', 'border-gray-200', 'rounded', 'py-2', 'px-2', 'leading-tight', 'focus:outline-none', 'focus:bg-white', 'focus:border-gray-500');
        dateInput.type = 'date';
        dateInput.id = 'other-date-reserve'
        dateInput.value = '{{ request('date') }}';

        // เพิ่ม dateInput ใน dateDiv
        dateDiv.appendChild(dateLabel);
        dateDiv.appendChild(dateInput);

        // เพิ่ม checkboxDiv, selectDiv, และ dateDiv ใน newInputContainer
        newInputContainer.appendChild(checkboxDiv);
        newInputContainer.appendChild(selectDiv);
        newInputContainer.appendChild(dateDiv);

        // เพิ่ม newInputContainer ใน container ที่ต้องการ
        const container = document.getElementById('block-other-train');
        if (container) {
            container.appendChild(newInputContainer);
        } else {
            console.error("Container element not found.");
        }

        // select.addEventListener('change', function() {
        //     const selectedValue = select.value;
        //     console.log('Selected value:', selectedValue);
        // });

        // // เพิ่มเหตุการณ์ให้กับ date input
        // dateInput.addEventListener('change', function() {
        //     const selectedDate = dateInput.value;
        //     console.log('Selected date:', selectedDate);
        // });
    }


    function coppy(){
        const isChecked = document.getElementById('cop-above').checked;
  
        if (isChecked) {
            const getInputValue = (id) => document.getElementById(id).value;
            const setInputValue = (id, value) => document.getElementById(id).value = value;

            const elements = ['company', 'address', 'contact', 'phone', 'email', 'fax'];
            const repElements = ['bil-company', 'bil-address', 'bil-contact', 'bil-phone', 'bil-email', 'bil-fax'];

            elements.forEach((element, index) => {
            const value = getInputValue(element);
            setInputValue(repElements[index], value);
            });
        }
        //  else {
        //     // ถ้า checkbox ไม่ถูกติ๊ก ให้เคลียร์ค่าใน input หมายเลข rep
        //     const repElements = ['rep-company', 'rep-address', 'rep-contact', 'rep-phone', 'rep-email', 'rep-fax'];
        //     repElements.forEach((element) => {
        //     setInputValue(element, '');
        //     });
        // }
    }
</script>
@endsection
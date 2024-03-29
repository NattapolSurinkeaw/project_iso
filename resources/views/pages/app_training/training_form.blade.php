@extends('layouts.main')
@section('title') TrainingForm @endsection
@section('content')
<div class="py-4">
    {{-- @dd($courses) --}}
    <div class="w-full max-w-[1080px] mx-auto mt-5 px-6">
        <div class="bg-[#fff] w-full p-6 pt-5 drop-shadow-2xl rounded-xl">
            <div class="items-center w-full mt-6 mb-6">
                <p class="text-gray-600 text-2xl font-ligth text-center">Request For Quote</p>
                <p class="text-gray-600 text-l text-center"> คำขอใบเสนอราคาการฝึกอบรม</p>
                <p class="text-gray-600 text-xl text-center">(In-house training)</p>
            </div>
            <hr class="mb-3">

            <p class="text-gray-600 text-xl font-ligth ">Issue to: </p>
            <p class="text-gray-600 text-l mb-4">ออกให้ </p>
            
            <div class="flex gap-4 mb-2">
                <div class="w-full">
                    <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="rep-address">Company</label>
                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
                        id="company" type="text">
                    <p class="text-xs text-red-500 hidden" id="validate-company">กรุณากรอกข้อมูล company</p>
                </div>
                <div class="w-full">
                    <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="rep-address">Branch</label>
                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
                        id="branch" type="text" maxlength="5">
                    <p class="text-xs text-red-500 hidden" id="validate-branch">กรุณากรอกข้อมูล branch</p>
                </div>
            </div>
            <div class="w-full mb-2">
                <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="address">Address</label>
                <textarea class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
                id="address" type="text"></textarea>
                <p class="text-xs text-red-500 hidden" id="validate-address">กรุณากรอกข้อมูล address</p>
            </div>

            <div class="flex gap-4 mb-3">
                <div class="w-full md:w-1/2 mb-6 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="tax-id">Contact</label>
                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white"
                        id="contact" type="text">
                    <p class="text-xs text-red-500 hidden" id="validate-contact">กรุณากรอกข้อมูล contact</p>
                </div>
                <div class="w-full md:w-1/2">
                    <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="position">Position</label>
                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
                        id="position" type="text">
                    <p class="text-xs text-red-500 hidden" id="validate-position">กรุณากรอกข้อมูล position</p>
                </div>
            </div>



            <div class="flex gap-4 mb-3">
                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="phone">Phone</label>
                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
                        id="phone" maxlength="10" type="text">
                    <p class="text-xs text-red-500 hidden" id="validate-phone">กรุณากรอกข้อมูล phone</p>
                </div>

                <div class="w-full md:w-1/3 mb-4 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="email">E-mail</label>
                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
                        id="email" type="email">
                    <p class="text-xs text-red-500 hidden" id="validate-email">กรุณากรอกข้อมูล E-mail</p>
                </div>

                <div class="w-full md:w-1/3 mb-4 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="fax">Fax</label>
                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
                        id="fax" type="text">
                    <p class="text-xs text-red-500 hidden" id="validate-fax">กรุณากรอกข้อมูล Fax</p>
                </div>
            </div>

            <div class="flex justify-between mt-3">
                <p class="text-gray-600 text-xl font-ligth ">Billing to: </p>
                <div class="flex items-center mb-2 mt-2">
                    <input onclick="coppy()" id="cop-above" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                    <label for="cop-above" class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-500">Same as above address</label>
                </div>
            </div>
            <!-- คัดลอกข้างบน -->

            <p class="text-gray-600 text-l mb-4">ออกใบเสร็จรับเงินให้ </p>
            <div class="flex gap-4 mb-3 w-full">
                <div class="w-full">
                    <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-2" for="rep-company">Company</label>
                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4  focus:outline-none focus:bg-white focus:border-gray-500"
                        id="bil-company" type="text">
                    <p class="text-xs text-red-500 hidden" id="validate-bil-company">กรุณากรอกข้อมูล Company</p>
                </div>
                <div class="w-full">
                    <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-2" for="rep-branch">Branch</label>
                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4  focus:outline-none focus:bg-white focus:border-gray-500"
                        id="bil-branch" type="text" maxlength="5">
                    <p class="text-xs text-red-500 hidden" id="validate-bil-branch">กรุณากรอกข้อมูล branch</p>
                </div>
            </div>
            <div class="flex flex-col mb-4 w-full">
                <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-2" for="rep-address">Address</label>
                <textarea class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4  focus:outline-none focus:bg-white focus:border-gray-500"
                    id="bil-address" type="text"></textarea>
                <p class="text-xs text-red-500 hidden" id="validate-bil-address">กรุณากรอกข้อมูล Address</p>
            </div>

            <div class="flex gap-4 ">
                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                    <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-1" for="tax-id">
                        Tax ID
                    </label>
                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white"
                        id="bil-tax-id" type="text">
                    <p class="text-xs text-red-500 hidden" id="validate-bil-tax-id">กรุณากรอกข้อมูล Tex ID</p>
                </div>
                <div class="w-full">
                    <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-1" for="rep-contact">
                        Contact
                    </label>
                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
                        id="bil-contact" type="text">
                    <p class="text-xs text-red-500 hidden" id="validate-bil-contact">กรุณากรอกข้อมูล Contact</p>
                </div>
                <div class="w-full">
                    <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-1"for="title">
                        Title
                    </label>
                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
                        id="bil-title" type="text">
                    <p class="text-xs text-red-500 hidden" id="validate-bil-title">กรุณากรอกข้อมูล Title</p>
                </div>
            </div>



            <div class="flex gap-4 mb-3">
                <div class="w-full">
                    <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-1" for="rep-phone">
                        Phone
                    </label>
                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
                        id="bil-phone" type="text" maxlength="10">
                    <p class="text-xs text-red-500 hidden" id="validate-bil-phone">กรุณากรอกข้อมูล Tex ID</p>
                </div>
                <div class="w-full">
                    <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-1" for="rep-email">E-mail</label>
                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
                    id="bil-email" type="email">
                    <p class="text-xs text-red-500 hidden" id="validate-bil-email">กรุณากรอกข้อมูล E-mail</p>
                </div>
                <div class="w-full">
                    <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-1" for="bil-fax">Fax</label>
                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
                    id="bil-fax" name="bil-fax" type="text">
                    <p class="text-xs text-red-500 hidden" id="validate-bil-fax">กรุณากรอกข้อมูล Fax</p>
                </div>
            </div>

            <p class="text-gray-600 text-xl font-ligth mt-5">Request for training course : </p>
            <p class="text-gray-600 text-l mb-4">ระบุหลักสูตรที่ต้องการ </p>
            <textarea class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 focus:outline-none focus:bg-white focus:border-gray-500"
                id="training-reserve" type="text"  disabled>{{$course->name}}</textarea>
            <div class="flex items-center gap-4 mb-4 mt-4">
                <div class="w-full md:w-1/2 mb-6 md:mb-0">
                    <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-2" for="number-participants">
                        The number of participants
                    </label>
                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white"
                        id="number-participants" name="number-participants" type="number">
                        <p class="text-xs text-red-500 hidden" id="validate-number-participants">กรุณากรอกข้อมูล number of participants</p>
                </div>
                <div class="w-full md:w-1/2 ">
                    <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-2" for="date-reserve">
                        Requires date of training
                    </label>
                    @if(request('date'))
                    <input
                        class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
                        id="date-reserve" name="date-reserve" type="date" value="{{ request('date') }}">
                        <p class="text-xs text-red-500 hidden" id="validate-date-reserve">กรุณากรอกข้อมูล reserve date</p>
                    @endif
                </div>
            </div>

            <h1 class="text-gray-600 text-xl font-ligth mt-5">Request for other courses : </h1>
            <div class="flex justify-between">
                <!-- ปุ่มเพิ่ม course -->
                <p class="text-gray-600 text-l mb-4">ระบุหลักสูตรอื่น ๆ (หากมี) </p>
                <box-icon name='plus-medical' class="cursor-pointer p-1 rounded-md hover:bg-orange-300" onclick="addOtherCourses()"></box-icon>
            </div>
            <div class="flex justify-between items-center gap-4 mb-2">
                <div class="w-full max-w-[20px]">
                    <input id="check-reserve" type="checkbox" value="" class="w-5 h-10 text-blue-600 bg-gray-100 border-gray-300 rounded">
                </div>
                <div class="w-full md:w-3/5 mb-6 md:mb-0">
                    <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-2"
                        for="other-course">
                        course
                    </label>
                    <div class="relative">
                        <select class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded focus:outline-none focus:bg-white focus:border-gray-500" name="other-course" id="other-course">
                            <option value="">other course</option>
                            @foreach($courses as $rowcourse)
                                @if($rowcourse->id != $course->id)
                                    <option value="{{$rowcourse->id}}">{{$rowcourse->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="w-full md:w-[37%] mb-6 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2">
                        required date
                    </label>
                    @if(request('date'))
                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-2 focus:outline-none focus:bg-white focus:border-gray-500"
                    id="other-date-reserve" value="{{ request('date') }}" type="date">
                    @endif
                </div>
            </div>
            <div id="block-other-train"></div>

            <p class="text-gray-600 text-xl font-ligth mt-5">Special requisition : </p>
            <p class="text-gray-600 text-l mb-4">ข้อเสนอหรือความต้องการพิเศษใด ๆ </p>
            <textarea class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 focus:outline-none focus:bg-white focus:border-gray-500"
                id="special-request" type="text"></textarea>

            <p class="text-gray-600 text-xl font-ligth mt-4">ลงนาม : </p>
            <div class="flex gap-4">
                <div class="w-full md:w-1/2 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="grid-city">
                        Name
                    </label>
                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
                        id="reserve-name" type="text">
                    <p class="text-xs text-red-500 hidden" id="validate-reserve-name">กรุณากรอกข้อมูล name</p>
                </div>

                <div class="w-full md:w-1/2 md:mb-0">
                    <label class="block tracking-wide text-gray-700 text-sm font-ligth mb-2" for="grid-state">
                        Position
                    </label>
                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
                        id="reserve-position" type="text">
                    <p class="text-xs text-red-500 hidden" id="validate-reserve-position">กรุณากรอกข้อมูล Position</p>
                </div>
                <div class="w-full md:w-1/2 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="grid-city">
                        Mobile
                    </label>
                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
                        id="reserve-tel" maxlength="10" type="text">
                    <p class="text-xs text-red-500 hidden" id="validate-reserve-tel">กรุณากรอกข้อมูล Tel</p>
                </div>

                <div class="w-full md:w-1/2 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-sm font-ligth mb-2" for="grid-state">
                        E-mail
                    </label>
                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 focus:outline-none focus:bg-white focus:border-gray-500"
                        id="reserve-email" type="email">
                    <p class="text-xs text-red-500 hidden" id="validate-reserve-email">กรุณากรอกข้อมูล E-mail</p>
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
    let selectedCourse = {!! $course !!}
    console.log(selectedCourse.id)
    let btnSubmit = document.querySelector('#btnSubmit');
    const loadingModal = document.getElementById('loading-modal');
    btnSubmit.addEventListener('click', () => {
        validate()
    })

    document.getElementById('branch').addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
    document.getElementById('bil-branch').addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
    document.getElementById('reserve-tel').addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
    document.getElementById('bil-phone').addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
    document.getElementById('phone').addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    function validate() {
        console.log('Validating')
        const fieldsToValidate = ['company', 'branch', 'address', 'contact', 'position', 'phone', 'email', 'fax',
                                'bil-company', 'bil-branch', 'bil-address', 'bil-tax-id', 'bil-contact', 'bil-title', 
                                'bil-phone', 'bil-email', 'bil-fax', 'number-participants', 'date-reserve', 'reserve-name', 
                                'reserve-position', 'reserve-tel', 'reserve-email'];
        let isValid = true;

        fieldsToValidate.forEach(fieldName => {
            const fieldValue = document.querySelector(`#${fieldName}`).value;
            const validateField = document.querySelector(`#validate-${fieldName}`);

            if (!fieldValue) {
                validateField.classList.remove('hidden');
                isValid = false;
            } else {
                validateField.classList.add('hidden');

                if (fieldName.includes('email') && !isValidEmail(fieldValue)) {
                    validateField.classList.remove('hidden');
                    isValid = false;
                }
            }
        });

        if(isValid) {
            reserveTraining()
        }
    }

    function isValidEmail(email) {
        const emailRegex = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
        return emailRegex.test(email);
    }

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
            branch: getValueById('branch'),
            address: getValueById('address'),
            contact: getValueById('contact'),
            position: getValueById('position'),
            phone: getValueById('phone'),
            email: getValueById('email'),
            fax: getValueById('fax'),

            bil_company: getValueById('bil-company'),
            bil_branch: getValueById('bil-branch'),
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
        newInputContainer.classList.add('flex','items-center', 'gap-4', 'mb-2');

        // สร้าง element ของ div ที่บรรจุ checkbox
        const checkboxDiv = document.createElement('div');
        checkboxDiv.classList.add('w-full', 'max-w-[20px]');

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
        selectLabel.classList.add('block', 'tracking-wide', 'text-gray-700', 'text-sm', 'font-ligth', 'mb-2');
        selectLabel.htmlFor = 'other-course';
        selectLabel.textContent = 'course';

        // สร้าง element ของ div ที่บรรจุ select element
        const selectContainer = document.createElement('div');
        selectContainer.classList.add('relative');

        // สร้าง element ของ select element
        const select = document.createElement('select');
        select.classList.add('block', 'w-full', 'bg-gray-200', 'border', 'border-gray-200', 'text-gray-700', 'py-2', 'px-4', 'pr-8', 'rounded', ', 'focus:outline-none', 'focus:bg-white', 'focus:border-gray-500');
        select.id = 'other-course';
        select.name = 'other-course';
        course.forEach(courseItem => {
            if (courseItem.id !== selectedCourse.id) {
                const option = document.createElement('option');
                option.text = courseItem.name;
                option.value = courseItem.id;
                select.appendChild(option);
            }
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
        dateLabel.classList.add('block', 'tracking-wide', 'text-gray-700', 'text-sm', 'font-ligth', 'mb-2');
        dateLabel.htmlFor = 'other-date-reserve';
        dateLabel.textContent = 'required date';

        // สร้าง element ของ input date
        const dateInput = document.createElement('input');
        dateInput.classList.add('block', 'w-full', 'bg-gray-200', 'text-gray-700', 'border', 'border-gray-200', 'rounded', 'py-2', 'px-2', ', 'focus:outline-none', 'focus:bg-white', 'focus:border-gray-500');
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

            const elements = ['company', 'branch', 'address', 'contact', 'phone', 'email', 'fax'];
            const repElements = ['bil-company', 'bil-branch', 'bil-address', 'bil-contact', 'bil-phone', 'bil-email', 'bil-fax'];

            elements.forEach((element, index) => {
            const value = getInputValue(element);
            setInputValue(repElements[index], value);
            });
        }
    }
</script>
@endsection
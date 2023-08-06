@extends('layouts.main')
@section('title') TrainingForm @endsection
@section('content')
<div class="pt-10">
    {{-- @dd($courses) --}}
    <form class="w-full max-w-[1080px] mx-auto my-5 mb-6 p-6">
        <div class="bg-[#fff] w-full p-6 pt-5 drop-shadow-2xl rounded-xl">
            <div class="items-center w-full mt-6 mb-6">
            <p class="text-gray-600 text-2xl font-bold text-center">Request For Quote</p>
            <p class="text-gray-600 text-l text-center"> คำขอใบเสนอราคาการฝึกอบรม</p>
            <p class="text-gray-600 text-xl text-center">(In-house training)</p>
            </div>
            <hr class="mb-3">

            <p class="text-gray-600 text-xl font-bold ">Issue to: </p>
            <p class="text-gray-600 text-l mb-4">ออกให้ </p>
            <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="rep-address">Company</label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4  leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="company" type="text">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="address">Address</label>
                    <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4  leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="address" type="text"></textarea>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="tax-id">Contact</label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white"
                        id="contact" type="text">
                    {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="position">Position</label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="position" type="text">
                </div>
            </div>



            <div class="flex flex-wrap -mx-3">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone">Phone</label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="phone" type="text">
                </div>

                <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">E-mail</label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="email" type="email">
                </div>

                <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="fax">Fax</label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
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
            <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="rep-company">
                        Company
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4  leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="rep-company" type="text">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="rep-address">
                        Address
                    </label>
                    <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4  leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="rep-address" type="text"></textarea>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mt-4">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="tax-id">
                        Tax ID
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="tax-id" type="text">
                    {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                </div>
                <div class="w-full md:w-1/3 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="rep-contact">
                        Contact
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="rep-contact" type="text">
                </div>
                <div class="w-full md:w-1/3 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="title">
                        Title
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="title" type="text">
                </div>
            </div>



            <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="rep-phone">
                        Phone
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="rep-phone" type="text">
                </div>

                <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="rep-email">E-mail</label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="rep-email" type="email">
                </div>

                <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="rep-fax">Fax</label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="rep-fax" type="text">
                </div>
            </div>

            <p class="text-gray-600 text-xl font-bold mt-5">Request for traning coure : </p>
            <p class="text-gray-600 text-l mb-4">ระบุหลักสูตรที่ต้องการ </p>
            <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="rep-address" type="text">{{$course->name}}</textarea>
            <div class="flex flex-wrap -mx-3 mb-4 mt-4">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="tax-id">
                        The text of paticipants
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="tax-id" type="text">
                    {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                </div>
                <div class="w-full md:w-1/2 px-3 ">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="position">
                        Requires date of traning
                    </label>
                    @if(request('date'))
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="position" type="date" value="{{ request('date') }}">
                    @endif
                </div>
            </div>
            <h1 class="text-gray-600 text-xl font-bold mt-5">Request for other courses : </h1>
            <div class="flex justify-between">
                <p class="text-gray-600 text-l mb-4">ระบุหลักสูตรอื่น ๆ (หากมี) </p>
<!-- ปุ่มเพิ่ม course -->
                <box-icon name='plus-medical' class="cursor-pointer p-1 rounded-md hover:bg-orange-300" onclick="addOtherCourses()"></box-icon>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-0 px-3 mb-6 md:mb-0 mt-5">
                    <input id="default-checkbox" type="checkbox" value="" class="w-5 h-10 text-blue-600 bg-gray-100 border-gray-300 rounded">
                </div>
                <div class="w-full md:w-3/5 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-state">
                        course
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option>New Mexico</option>
                            <option>Missouri</option>
                            <option>Texas</option>
                        </select>

                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-[37%] px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="fax">
                        required date
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="fax" type="date">
                </div>
            </div>
            <div id="container"></div>
            <p class="text-gray-600 text-xl font-bold mt-5">Special requisition : </p>
            <p class="text-gray-600 text-l mb-4">ข้อเสนอหรือความต้องการพิเศษใด ๆ </p>
            <textarea
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="rep-address" type="text"></textarea>

            <p class="text-gray-600 text-xl font-bold mt-4">ลงนาม : </p>
            <div class="flex flex-wrap -mx-3 ">
                <div class="w-full md:w-1/2 px-3 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                        Name
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-city" type="text">
                </div>

                <div class="w-full md:w-1/2 px-3 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-state">
                        Position
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-city" type="text">
                </div>
                <div class="w-full md:w-1/2 px-3  md:mb-0 mt-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                        Mobile
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-city" type="text">
                </div>

                <div class="w-full md:w-1/2 px-3  md:mb-0 mt-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-state">
                        E-mail
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-city" type="email">
                </div>
            </div>

        </div> {{-- endbox --}}

        <button type="summit" class="w-full mt-4 text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-md px-5 py-2 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">send</button>
    </form>

</div>
@endsection
@section('scripts')
<script>
    function formatDate() {
    var input = document.getElementById('position');
    var date = new Date(input.value);
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    // แปลงเป็นรูปแบบ dd/mm/yyyy
    var formattedDate = ('0' + day).slice(-2) + '/' + ('0' + month).slice(-2) + '/' + year;

    console.log(formattedDate); // แสดงผลลัพธ์ในคอนโซล
    
    input.value = formattedDate;
    }

    function addOtherCourses(){
        console.log("addcourse")
        const newInputContainer = document.createElement('div');
        newInputContainer.classList.add('flex', 'flex-wrap', '-mx-3', 'mb-2');

        // สร้าง element ของ div ที่บรรจุ checkbox
        const checkboxDiv = document.createElement('div');
        checkboxDiv.classList.add('w-full', 'md:w-0', 'px-3', 'mb-6', 'md:mb-0', 'mt-5');

        // สร้าง element ของ checkbox
        const checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.value = '';
        checkbox.classList.add('w-5', 'h-10', 'text-blue-600', 'bg-gray-100', 'border-gray-300', 'rounded');

        // เพิ่ม checkbox ใน checkboxDiv
        checkboxDiv.appendChild(checkbox);

        // สร้าง element ของ div ที่บรรจุเลือก course
        const selectDiv = document.createElement('div');
        selectDiv.classList.add('w-full', 'md:w-3/5', 'px-3', 'mb-6', 'md:mb-0');

        // สร้าง element ของ label สำหรับเลือก course
        const selectLabel = document.createElement('label');
        selectLabel.classList.add('block', 'uppercase', 'tracking-wide', 'text-gray-700', 'text-xs', 'font-bold', 'mb-2');
        selectLabel.htmlFor = 'grid-state';
        selectLabel.textContent = 'course';

        // สร้าง element ของ div ที่บรรจุ select element
        const selectContainer = document.createElement('div');
        selectContainer.classList.add('relative');

        // สร้าง element ของ select element
        const select = document.createElement('select');
        select.classList.add('block', 'appearance-none', 'w-full', 'bg-gray-200', 'border', 'border-gray-200', 'text-gray-700', 'py-2', 'px-4', 'pr-8', 'rounded', 'leading-tight', 'focus:outline-none', 'focus:bg-white', 'focus:border-gray-500');
        select.id = 'grid-state';
        select.innerHTML = `
            <option>New Mexico</option>
            <option>Missouri</option>
            <option>Texas</option>
        `;

        // สร้าง element ของ div ที่บรรจุ icon ของ select
        const selectIconDiv = document.createElement('div');
        selectIconDiv.classList.add('pointer-events-none', 'absolute', 'inset-y-0', 'right-0', 'flex', 'items-center', 'px-2', 'text-gray-700');

        // สร้าง element ของ icon ของ select
        const selectIcon = document.createElement('svg');
        selectIcon.classList.add('fill-current', 'h-4', 'w-4');
        selectIcon.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
        selectIcon.setAttribute('viewBox', '0 0 20 20');
        selectIcon.innerHTML = `
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
        `;

        // เพิ่ม selectIcon ใน selectIconDiv
        selectIconDiv.appendChild(selectIcon);

        // เพิ่ม select และ selectIconDiv ใน selectContainer
        selectContainer.appendChild(select);
        selectContainer.appendChild(selectIconDiv);

        // เพิ่ม selectLabel และ selectContainer ใน selectDiv
        selectDiv.appendChild(selectLabel);
        selectDiv.appendChild(selectContainer);

        // สร้าง element ของ div ที่บรรจุ input date
        const dateDiv = document.createElement('div');
        dateDiv.classList.add('w-full', 'md:w-[37%]', 'px-3', 'mb-6', 'md:mb-0');

        // สร้าง element ของ label สำหรับ input date
        const dateLabel = document.createElement('label');
        dateLabel.classList.add('block', 'uppercase', 'tracking-wide', 'text-gray-700', 'text-xs', 'font-bold', 'mb-2');
        dateLabel.htmlFor = 'fax';
        dateLabel.textContent = 'required date';

        // สร้าง element ของ input date
        const dateInput = document.createElement('input');
        dateInput.classList.add('appearance-none', 'block', 'w-full', 'bg-gray-200', 'text-gray-700', 'border', 'border-gray-200', 'rounded', 'py-2', 'px-2', 'leading-tight', 'focus:outline-none', 'focus:bg-white', 'focus:border-gray-500');
        dateInput.id = 'fax';
        dateInput.type = 'date';

        // เพิ่ม dateInput ใน dateDiv
        dateDiv.appendChild(dateLabel);
        dateDiv.appendChild(dateInput);

        // เพิ่ม checkboxDiv, selectDiv, และ dateDiv ใน newInputContainer
        newInputContainer.appendChild(checkboxDiv);
        newInputContainer.appendChild(selectDiv);
        newInputContainer.appendChild(dateDiv);

        // เพิ่ม newInputContainer ใน container ที่ต้องการ
        const container = document.getElementById('container');
        if (container) {
            container.appendChild(newInputContainer);
        } else {
            console.error("Container element not found.");
        }

        select.addEventListener('change', function() {
        const selectedValue = select.value;
        console.log('Selected value:', selectedValue);
        });

        // เพิ่มเหตุการณ์ให้กับ date input
        dateInput.addEventListener('change', function() {
        const selectedDate = dateInput.value;
        console.log('Selected date:', selectedDate);
        });

        
        
    }





    function coppy(){
    // const coppy = document.getElementById('coppy');
    // const company = document.getElementById('company').value;
    // const address = document.getElementById('address').value;
    // const contact = document.getElementById('contact').value;
    // const phone = document.getElementById('phone').value;
    // const email = document.getElementById('email').value;
    // const fax = document.getElementById('fax').value;

    // const repCompany = document.getElementById('rep-company');
    // const repAddress = document.getElementById('rep-address');
    // const repContact = document.getElementById('rep-contact');
    // const repPhone = document.getElementById('rep-phone');
    // const repEmail = document.getElementById('rep-email');
    // const repFax = document.getElementById('rep-fax');
    // repCompany.value = company;
    // repAddress.value = address;
    // repContact.value = contact;
    // repPhone.value = phone;
    // repEmail.value = email;
    // repFax.value = fax;
    const getInputValue = (id) => document.getElementById(id).value;
    const setInputValue = (id, value) => document.getElementById(id).value = value;

    const elements = ['company', 'address', 'contact', 'phone', 'email', 'fax'];
    const repElements = ['rep-company', 'rep-address', 'rep-contact', 'rep-phone', 'rep-email', 'rep-fax'];

    elements.forEach((element, index) => {
      const value = getInputValue(element);
      setInputValue(repElements[index], value);
    });

  }
</script>
@endsection
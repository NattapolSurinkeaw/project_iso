@extends('backend.layouts.main')
@section('title')
    All Question of Quiz : {{ $quiz_name->quiz_name }}
@endsection
@section('container')
    <div class="h-screen">
        <div class="mx-10 my-4 flex justify-between items-center gap-4">
            <a href="/backend/coursedetail/{{$quiz_name->elerningcourse_id}}" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"">BACK</a>
            <h1 class="text-xl font-bold">Table Question of Quiz : {{ $quiz_name->quiz_name }}</h1>
            <button type="button" id="create-questions" onclick="createQuestion()" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
        </div>

        <div class="relative h-4/5 overflow-y-scroll mx-10">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400 ">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center rounded-tl-lg">
                            id
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Question
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            choice1
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            choice2
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            choice3
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            choice4
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            answer
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            score
                        </th>
                        <th scope="col" class="px-6 py-3 text-center rounded-tr-lg">
                            actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1 @endphp
                    @foreach ($questions as $question)
                        <tr class="bg-white dark:bg-gray-800 border-b-2">
                            <th scope="row"
                                class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                {{ $i++ }}
                            </th>
                            <td class="px-6 py-4 text-center">
                                {{ $question->question }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $question->choice1 }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $question->choice2 }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $question->choice3 }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $question->choice4 }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $question->answer }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $question->score }}
                            </td>
                            <td class="px-6 py-4">
                                <button class="bg-yellow-500 p-2 rounded-lg text-white text-center"
                                    data-id="{{ $question->id }}" id="editQuestion">แก้ไข</button>
                                <button class="bg-red-600 p-2 rounded-lg text-white text-center"
                                    data-id="{{ $question->id }}" id="delQuestion">ลบ</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('be-scripts')
<script>
    let quiz_id = {!! $quiz_name->id !!}
    let btneditQuestions = document.querySelectorAll('#editQuestion');
    let btndelQuestions = document.querySelectorAll('#delQuestion');

    btneditQuestions.forEach(btneditQuestion => {
        btneditQuestion.addEventListener('click', () => {
            // ดึงค่า data-id จากปุ่มที่ถูกคลิก
            let questId = btneditQuestion.getAttribute('data-id');
            editQuestion(questId);
        });
    });

    btndelQuestions.forEach(btndelQuestion => {
        btndelQuestion.addEventListener('click', () => {
            let questId = btndelQuestion.getAttribute('data-id');
            delQuestion(questId);
        });
    });
    

    function createQuestion() {
        Swal.fire({
            title: "Create announcement",
            html: ` <div class="w-full flex flex-col ">
                        <label for="content-annouce" class="text-start block text-sm font-medium leading-6 text-gray-900">Question</label>
                        <input type="textarea" id="content-annouce" name="addAnn" class="swal2-input block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Name" value="">
                    </div>
                    <div class="w-full mt-4 flex flex-col items-start ">
                        <label for="choice1" clas="block text-sm font-medium leading-6 text-gray-900">choice1</label>
                        <input type="text" id="choice1" name="choice1" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Choice1" value="">
                    </div>
                    <div class="w-full mt-4 flex flex-col items-start ">
                        <label for="choice2" clas="block text-sm font-medium leading-6 text-gray-900">choice2</label>
                        <input type="text" id="choice2" name="choice2" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Choice2" value="">
                    </div>
                    <div class="w-full mt-4 flex flex-col items-start ">
                        <label for="choice3" clas="block text-sm font-medium leading-6 text-gray-900">choice3</label>
                        <input type="text" id="choice3" name="choice3" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Choice3" value="">
                    </div>
                    <div class="w-full mt-4 flex flex-col items-start ">
                        <label for="choice4" clas="block text-sm font-medium leading-6 text-gray-900">choice4</label>
                        <input type="text" id="choice4" name="choice4" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Choice4" value="">
                    </div>
                    <div class="w-full mt-4 flex flex-col items-start ">
                        <label for="score" clas="block text-sm font-medium leading-6 text-gray-900">score</label>
                        <input type="number" id="score" name="score" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="10" value="">
                    </div>
                    <div class="w-full mt-4 flex flex-col items-start ">
                        <label for="answer" clas="block text-sm font-medium leading-6 text-gray-900">answer</label>
                        <select id="answer" name="answer" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option value="choice1">choice1</option>
                            <option value="choice2">choice2</option>
                            <option value="choice3">choice3</option>
                            <option value="choice4">choice4</option>
                        </select>
                    </div>
                  `,
            confirmButtonText: "Submit",
            focusConfirm: false,
            preConfirm: () => {
                const question = editor.getData();
                const choice1 = Swal.getPopup().querySelector("#choice1").value;
                const choice2 = Swal.getPopup().querySelector("#choice2").value;
                const choice3 = Swal.getPopup().querySelector("#choice3").value;
                const choice4 = Swal.getPopup().querySelector("#choice4").value;
                const score = Swal.getPopup().querySelector("#score").value;
                const answer = Swal.getPopup().querySelector("#answer").value;

                if (!question || !choice1 || !choice2 || !choice3 || !choice4 || !score || !answer) {
                    Swal.showValidationMessage(`Please enter your data.`);
                    return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
                }

                param = {
                    question: question,
                    quiz_id: quiz_id,
                    choice1: choice1,
                    choice2: choice2,
                    choice3: choice3,
                    choice4: choice4,
                    score: score,
                    answer: answer,
                }

                return param;
            },
            customClass: {
                popup: 'custom-swal-popup', // ปรับแต่งคลาส CSS ของ Popup
            },
        }).then((result) => {
            if (result.isConfirmed) {
                const data = result.value;
                console.log(data);
                axios.post(`/api/backend/createquestion`, data)
                    .then((response) => {
                        if(response.data.status == 'success') {
                            Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Your work has been saved',
                            showConfirmButton: false,
                            timer: 1000
                            }).then(() => {
                                location.reload()
                            });
                        }
                    })
                    .catch((error) => {
                        console.error('API Error:', error);
                        // จัดการข้อผิดพลาด
                    });
            }
        });

        ClassicEditor
            .create(document.querySelector('#content-annouce'))
            .then(instance => {
                editor = instance; // เก็บอินสแตนซ์ของ CKEditor ในตัวแปร editor
                writer.setStyle('max-width', '100%', instance.editing.view.document.getRoot());
            })
            .catch(error => {
                console.error(error);
            });

    }

    function editQuestion(questId) {
        axios.get(`/api/backend/getquestion/${questId}`).then((response) => {
            let data = response.data.data;
            console.log(data);
            let selectedAnswer = data.answer;
            Swal.fire({
            title: "Create announcement",
            html: ` <div class="w-full flex flex-col ">
                        <label for="content-annouce" class="text-start block text-sm font-medium leading-6 text-gray-900">Question</label>
                        <textarea id="content-annouce" name="addAnn">${data.question}</textarea>
                    </div>
                    <div class="w-full mt-4 flex flex-col items-start ">
                        <label for="choice1" clas="block text-sm font-medium leading-6 text-gray-900">choice1</label>
                        <input type="text" id="choice1" name="choice1" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Choice1" value="${data.choice1}">
                    </div>
                    <div class="w-full mt-4 flex flex-col items-start ">
                        <label for="choice2" clas="block text-sm font-medium leading-6 text-gray-900">choice2</label>
                        <input type="text" id="choice2" name="choice2" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Choice2" value="${data.choice2}">
                    </div>
                    <div class="w-full mt-4 flex flex-col items-start ">
                        <label for="choice3" clas="block text-sm font-medium leading-6 text-gray-900">choice3</label>
                        <input type="text" id="choice3" name="choice3" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Choice3" value="${data.choice3}">
                    </div>
                    <div class="w-full mt-4 flex flex-col items-start ">
                        <label for="choice4" clas="block text-sm font-medium leading-6 text-gray-900">choice4</label>
                        <input type="text" id="choice4" name="choice4" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Choice4" value="${data.choice4}">
                    </div>
                    <div class="w-full mt-4 flex flex-col items-start ">
                        <label for="score" clas="block text-sm font-medium leading-6 text-gray-900">score</label>
                        <input type="number" id="score" name="score" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="10" value="${data.score}">
                    </div>
                    <div class="w-full mt-4 flex flex-col items-start ">
                        <label for="answer" clas="block text-sm font-medium leading-6 text-gray-900">answer</label>
                        <select id="answer" name="answer" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option value="choice1" ${selectedAnswer === 'choice1' ? 'selected' : ''}>choice1</option>
                            <option value="choice2" ${selectedAnswer === 'choice2' ? 'selected' : ''}>choice2</option>
                            <option value="choice3" ${selectedAnswer === 'choice3' ? 'selected' : ''}>choice3</option>
                            <option value="choice4" ${selectedAnswer === 'choice4' ? 'selected' : ''}>choice4</option>
                        </select>
                    </div>
                  `,
            confirmButtonText: "Submit",
            focusConfirm: false,
            preConfirm: () => {
                const question = editor.getData();
                const choice1 = Swal.getPopup().querySelector("#choice1").value;
                const choice2 = Swal.getPopup().querySelector("#choice2").value;
                const choice3 = Swal.getPopup().querySelector("#choice3").value;
                const choice4 = Swal.getPopup().querySelector("#choice4").value;
                const score = Swal.getPopup().querySelector("#score").value;
                const answer = Swal.getPopup().querySelector("#answer").value;

                if (!question || !choice1 || !choice2 || !choice3 || !choice4 || !score || !answer) {
                    Swal.showValidationMessage(`Please enter your data.`);
                    return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
                }

                param = {
                    question: question,
                    quiz_id: quiz_id,
                    choice1: choice1,
                    choice2: choice2,
                    choice3: choice3,
                    choice4: choice4,
                    score: score,
                    answer: answer,
                }

                return param;
            },
            customClass: {
                popup: 'custom-swal-popup', // ปรับแต่งคลาส CSS ของ Popup
            },
        }).then((result) => {
            if (result.isConfirmed) {
                const data = result.value;
                axios.put(`/api/backend/editquestion/${questId}`, data)
                    .then((response) => {
                        if(response.data.status == 'success') {
                            Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Your work has been saved',
                            showConfirmButton: false,
                            timer: 1000
                            }).then(() => {
                                location.reload()
                            });
                        }
                    })
                    .catch((error) => {
                        console.error('API Error:', error);
                        // จัดการข้อผิดพลาด
                    });
            }
        });

        ClassicEditor
            .create(document.querySelector('#content-annouce'))
            .then(instance => {
                editor = instance; // เก็บอินสแตนซ์ของ CKEditor ในตัวแปร editor
                writer.setStyle('max-width', '100%', instance.editing.view.document.getRoot());
            })
            .catch(error => {
                console.error(error);
            });
        })
    }

    function delQuestion(questId) {
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
                axios.delete(`/api/backend/delquestion/${questId}`)
                .then((response) => {
                    let data = response.data.status;
                    console.log(data);
                    if(data == 'success') {
                        Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                        ).then(() => {location.reload()})
                    }
                })
                
            }
        })
        console.log(questId);
    }
</script>
@endsection

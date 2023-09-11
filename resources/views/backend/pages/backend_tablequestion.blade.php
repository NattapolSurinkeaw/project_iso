@extends('backend.layouts.main')
@section('title')
    All Question of Quiz : {{ $quiz_name->quiz_name }}
@endsection
@section('container')
    <div class="h-screen">
        <div class="mx-10 my-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">Table Question of Quiz : {{ $quiz_name->quiz_name }}</h1>
            <button type="button" id="create-questions" onclick="createQuestion()"
                class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
        </div>

        <div class="relative h-4/5 my-10 overflow-y-scroll mx-10">
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
                                {{ $question->anwser }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $question->score }}
                            </td>
                            <td class="px-6 py-4">
                                <button class="bg-yellow-500 p-2 rounded-lg text-white text-center"
                                    data-id="{{ $question->id }}" id="editQuestion">รายละเอียด / แก้ไข</button>
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
    // console.log(quiz_id)

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
                        <label for="anwser" clas="block text-sm font-medium leading-6 text-gray-900">anwser</label>
                        <select id="anwser" name="anwser" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
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
                const anwser = Swal.getPopup().querySelector("#anwser").value;

                // if (!question) {
                //     Swal.showValidationMessage(`Please enter your data.`);
                //     return false; // ยกเลิกการยืนยันหากข้อมูลไม่ถูกต้อง
                // }

                param = {
                    question: question,
                    quiz_id: quiz_id,
                    choice1: choice1,
                    choice2: choice2,
                    choice3: choice3,
                    choice4: choice4,
                    score: score,
                    anwser: anwser,
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
                // axios.post('/api/backend/createannouce', data)
                //     .then((response) => {
                //         Swal.fire({
                //             position: 'center',
                //             icon: 'success',
                //             title: 'Your work has been saved',
                //             showConfirmButton: false,
                //             timer: 1000
                //         }).then(() => {
                //             location.reload()
                //         });
                //     })
                //     .catch((error) => {
                //         console.error('API Error:', error);
                //         // จัดการข้อผิดพลาด
                //     });
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
</script>
@endsection

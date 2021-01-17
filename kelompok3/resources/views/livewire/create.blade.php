<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
        
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:w-full sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>

                <div class="bg-white px-4  pt-5 pb-4 sm:p-6 sm:pb-4 sm:pl-6 sm:pr-4" >
                <label for="formName" class="block text-gray-2500 text-sm font-bold mb-2">Submission of Research Proposal </label>
                    <div class="">


                <table class="table table-borderless">
                <tbody>

                        <tr>
                            <td class=" px-4 py-2 text-center" colspan="5">
                            <label for="formName" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                            <input type="text" class="shadow appearance-none border rounded w-half py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formName" wire:model="name">
                            @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                            </td>
                            <td class=" px-4 py-2 text-center" colspan="5">
                            <label for="formCodestudy" class="block text-gray-700 text-sm font-bold mb-2">Code of Study Field:</label>
                            <input type="text" class="shadow appearance-none border rounded w-half py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formCodestudy" wire:model="codestudy">
                            @error('codestudy') <span class="text-red-500">{{ $message }}</span>@enderror 
                            </td>
                            <td class=" px-4 py-2 text-center" colspan="5">
                            <label for="formStudent_number" class="block text-gray-700 text-sm font-bold mb-2">Student Number:</label>
                            <input type="text" class="shadow appearance-none border rounded w-half py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formStudent_number" wire:model="student_number">
                            @error('student_number') <span class="text-red-500">{{ $message }}</span>@enderror
                            </td>
                        </tr>
                
                </tbody>
            </table>
                        
            <table class="table table-borderless">
                <tbody>
                  
                        <tr>
                            <td class=" px-4 py-2 text-center" colspan="5">
                            <label for="formResearch_type" class="block text-gray-700 text-sm font-bold mb-2">Research Type:</label>
                            <input type="text" class="shadow appearance-none border rounded w-half mb-2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formResearch_type" wire:model="research_type">
                            @error('research_type') <span class="text-red-500">{{ $message }}</span>@enderror
                            </td>
                            <td class=" px-4 py-2 text-left" colspan="5">
                            <label for="formTitle" class="block text-yellow-700 text-sm font-bold">Example: SE</label>
                            <label for="formTitle" class="block text-yellow-700 text-sm font-bold">Code:</label>
                            <label for="formTitle" class="block text-green-700 text-sm font-bold">Tugas Akhir S1 TE (TA),</label>
                            <label for="formTitle" class="block text-green-700 text-sm font-bold">Skripsi S1 PTE (SK), and </label>  
                            <label for="formTitle" class="block text-green-700 text-sm font-bold">Seminar Teknik Elektro S1 PTE (SE)</label>
                            </td>
                        </tr>
                   
                </tbody>
            </table>

                        <div class="mb-4">
                            <label for="formTitle" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                            <textArea type="text" class="shadow appearance-none border rounded w-full py-2 px-3 mb-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formTitle" wire:model="title" row="5"></textarea>
                            @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <label for="formTitle" class="block text-yellow-700 text-sm font-bold">Rules of filling the supervisor data:</label>
                        <label for="formTitle" class="block text-green-700 text-sm font-bold">1. Please completely filling the First and Second Supervisor if you do the following research types: Tugas Akhir (TA), Skripsi (SK), and Tugas Akhir PTE (TK). </label>
                        <label for="formTitle" class="block text-green-700 text-sm font-bold">2. Please only filling the First Supervisor if you do the Seminar TE (SE) research. </label>
                        <label for="formTitle" class="block text-green-700 text-sm font-bold">3. Take a look the supervisor code by clicking here </label>
                        <div class="mb-4">
                            <label for="first_supervisor" class="block text-gray-700 text-sm font-bold mb-2">First Supervisor:</label>
                            <input type="text" class="shadow appearance-none border rounded w-half py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formFirst_supervisor" wire:model="first_supervisor">
                            @error('first_supervisor') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="second_supervisor" class="block text-gray-700 text-sm font-bold mb-2">Second Supervisor:</label>
                            <input type="text" class="shadow appearance-none border rounded w-half py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formSecond_supervisor" wire:model="second_supervisor">
                            @error('second_supervisor') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="Aim" class="block text-gray-700 text-sm font-bold mb-2">Aim:</label>
                            <textArea type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formAim" wire:model="Aim" row="5"></textarea>
                            @error('Aim') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="background" class="block text-gray-700 text-sm font-bold mb-2">Background:</label>
                            <textArea type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formBackground" wire:model="background" row="5"></textarea>
                            @error('background') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="originality" class="block text-gray-700 text-sm font-bold mb-2">Originality:</label>
                            <textArea type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formOriginality" wire:model="originality" row="5"></textarea>
                            @error('originality') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="schedule" class="block text-gray-700 text-sm font-bold mb-2">Schedule:</label>
                            <textArea type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formSchedule" wire:model="schedule" row="5"> </textarea>
                            @error('schedule') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="method" class="block text-gray-700 text-sm font-bold mb-2">method:</label>
                            <textArea type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formMethod" wire:model="method" row="5"> </textarea>
                            @error('method') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
    
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        Submit
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        
                        <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        Cancel
                        </button>
                    </span>
                    
                </form>
            </div>
        </div>
    </div>
</div>
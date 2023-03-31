
  <div class="container">
    <div class="container d-flex justify-content-center mt-5 flex-column align-items-center">
      <div class="d-flex mb-3" style="width: 800px">
        <div class="d-flex flex-column align-items-center btn bg-opacity-25 border rounded w-50 mr-2" style="
              background-color: rgb(227, 227, 227) !important;
              border-color: rgb(186, 186, 186) !important;
            ">
          <p style="color: indigo">0%</p>
          <h6>Result</h6>
        </div>
        <div class="d-flex flex-column align-items-center btn border rounded w-50 ms-3 mr-2"
          style="border-color: rgb(95, 150, 191) !important">
          <p class="text-primary">11</p>
          <h6>Total item</h6>
        </div>
        <div class="d-flex flex-column align-items-center btn border rounded w-50 ms-3 mr-2"
          style="border-color: rgb(95, 150, 191) !important">
          <p class="text-success">0</p>
          <h6>Correct</h6>
        </div>
        <div class="d-flex flex-column align-items-center btn border rounded w-50 ms-3 mr-2"
          style="border-color: rgb(95, 150, 191) !important">
          <p class="text-danger">0</p>
          <h6>Incorrect</h6>
        </div>
        <div class="d-flex flex-column align-items-center btn border rounded w-50 ms-3 mr-2"
          style="border-color: rgb(95, 150, 191) !important">
          <p class="text-warning unuttempted_ques"></p>
          <h6>Unattempted</h6>
        </div>
      </div>

      {* This is the layout of the table *}
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Question</th>
            <th scope="col">Option</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
        {foreach from=$response_ques key=key item=ques_data}
          <tr>
            <th scope="row">{$key+1}</th>
            <td>
              <a href="http://localhost/smarty/PHP_Project_with_Bootstrap/Template/explanation.php?que={$key}" class="w-100 text-decoration-none text-dark">{$ques_data.snippet}</a>
            </td>
            <td class="d-flex">
            {assign var=answer value=json_decode($ques_data['content_text'])}
            {assign var=answer_new value=json_decode(json_encode($answer), true)}
              {foreach from=$answer_new['answers'] key=key item=answer_data}
              <p class="border {if $answer_data.is_correct}bg-primary text-white{/if} d-flex justify-content-center align-items-center ms-2  rounded"
                style="width: 24px; height: 24px">
                {(65+$key)|chr}
              </p>
              {/foreach}
              
            </td>
            <td>
              <span class="ques_{$key+1}">
              {assign var="val" value={$key+1}}
                {if isset($user_ans.$val)}
                    {foreach from=$answer_new['answers'] key=key item=answer_data}
                      {if ($answer_data.is_correct) }
                          {assign var="correct" value={(65+$key)|chr}}
                      {/if}
                    {/foreach}
                    {if $user_ans.$val == $correct}
                      <span class="badge badge-success">correct</span>
                      {else}
                        <span class="badge badge-danger">Incorrect</span>
                    {/if}
                  {else}
                  <span class="badge badge-warning">Unattempted</span>
                {/if}
              </span>
            </td>
          </tr>
        {/foreach}
        </tbody>
      </table>
    </div>
  </div>
<script>
$(document).ready(function(){
  let attempted_data = JSON.parse(sessionStorage['attempted_ques']);
  attempted_data = [...new Set(attempted_data)]
  $('.unuttempted_ques').text(11-attempted_data.length);
})
</script>

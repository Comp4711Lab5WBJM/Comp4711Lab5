<h3>Tasks by Priority</h3>
	<table class="table">
		<tr>
			<th>Id</th>
			<th></th> 
			<th>Task</th>
			<th>Priority</th>
		</tr>

		<tr>
			<td>{id}</td>
			<td><input type='checkbox' name='task{id}'/></td>
			<td>{task}</td>
			<td>{priority}</td>
		</tr>
		{/display_tasks}    
	</table>
</form>
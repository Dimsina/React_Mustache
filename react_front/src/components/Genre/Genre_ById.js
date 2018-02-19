import React from 'react';
import { Link } from 'react-router-dom'
class Genre_ById extends React.Component {

	constructor(props) {
		super(props);
		this.state = {
			error: null,
			isLoaded: false,
			items: [],
			id : this.props.match.params.id
		};
	}

	componentDidMount() {
		fetch(`http://localhost/api/genres/read_one.php?id=${this.state.id}`)
			.then(res => res.json())
			.then(
				(result) => {
					this.setState({
						isLoaded: true,
						items : result
					});
				},
				(error) => {
					this.setState({
						isLoaded: true,
						error
					});
				}
			)
	}

	render() {
		const { error, isLoaded, items } = this.state;
		if (error) {
			return <div>Error: {error.message}</div>;
		} else if (!isLoaded) {
			return <div>Loading...</div>;
		} else {
			return (
				<ul>
					{items.map(item => (
						<li key={item.id}>
							<Link to={`/genre/${item.id}`}>{item.name}</Link>
						</li>
					))}
				</ul>
			);
		}
	}
}

export default Genre_ById;